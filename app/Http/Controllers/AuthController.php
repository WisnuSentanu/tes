<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'], 
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if (!$user) {
            Session::flash('status', 'failed');
            Session::flash('message', 'Login Invalid');
            return redirect('/login');
        }

        if ($user->status != 'active') {
            Session::flash('status', 'failed');
            Session::flash('message', 'Your account is not active yet. Please contact admin!');
            return redirect('/login');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($user->role_id == 1) {
                return redirect('dashboard');
            }

            if ($user->role_id == 2) {
                return redirect('profile');
            }
        }
            
            Session::flash('status', 'failed');
            Session::flash('message', 'Login Invalid!');
            return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}