<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body> 
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if (Auth::user()->role_id == 1)
                        <a href="/profile" class="icon-link" @if(request()->route()->uri == 'profile') @endif>
                            <span class="icon"><i class="bi bi-house-door"></i></span>
                            <span class="text">Profile</span>
                        </a>
                        <a href="#master-data" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-list-columns-reverse"></i></span>
                            <span class="text">Lembur</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}' || request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') show @endif" id="master-data">
                            <a href="/books" @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;" ><i class="bi bi-book"></i></span>
                                <span class="text" >Books</span> 
                            </a>
                            <a href="/categories" @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-credit-card"></i></span>
                                <span class="text" >Categories</span> 
                            </a>
                        </div>
                        <a href="#transaksi" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-credit-card"></i></span>
                            <span class="text">Cuti</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'transactions') show @endif" id="transaksi">
                            <a href="/transactions" @if(request()->route()->uri == 'transactions') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-cash-stack"></i></span>
                                <span class="text">Transactions</span> 
                            </a>
                        </div>
                        <a href="#laporan" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-file-earmark"></i></span>
                            <span class="text">Slip Gaji</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'reports') show @endif" id="laporan">
                            <a href="/reports" @if(request()->route()->uri == 'reports') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-journal-text"></i></span>
                                <span class="text">Reports</span> 
                            </a>
                        </div>
                        <a href="/change-password" @if(request()->route()->uri == 'change-password') class='active' @endif>
                            <span class="icon"><i class="bi bi-lock"></i></span>
                            <span class="text">Ubah Password</span> 
                        </a>
                        <a href="/logout">
                            <span class="icon"><i class="bi bi-box-arrow-left"></i> </span>
                            <span class="text">Log out</span> 
                        </a>
                        
                        <!-- <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                        <a href="/books" @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}') class='active' @endif>Books</a>
                        <a href="/categories" @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') class='active' @endif>Categories</a>
                        <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif>Users</a>
                        <a href="/rent-logs" @if(request()->route()->uri == 'rent-logs') class='active' @endif>Rent Log</a>
                        <a href="/logout">Logout</a> -->

                    @else
                        <!-- <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a> -->
                        <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif>
                            <span class="icon"><i class="bi bi-house-door"></i></span>
                            <span class="text">Profile</span>
                        </a>
                        <a href="#master-data" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-list-columns-reverse"></i></span>
                            <span class="text">Lembur</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}' || request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') show @endif" id="master-data">
                            <a href="/books" @if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;" ><i class="bi bi-book"></i></span>
                                <span class="text" >Books</span> 
                            </a>
                            <a href="/categories" @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-delete/{slug}') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-credit-card"></i></span>
                                <span class="text" >Categories</span> 
                            </a>
                        </div>
                        <a href="#transaksi" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-credit-card"></i></span>
                            <span class="text">Cuti</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'transactions') show @endif" id="transaksi">
                            <a href="/transactions" @if(request()->route()->uri == 'transactions') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-cash-stack"></i></span>
                                <span class="text">Transactions</span> 
                            </a>
                        </div>
                        <a href="#laporan" data-bs-toggle="collapse" class="collapsed">
                            <span class="icon"><i class="bi bi-file-earmark"></i></span>
                            <span class="text">Slip Gaji</span> 
                            <span class="arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <div class="collapse @if(request()->route()->uri == 'reports') show @endif" id="laporan">
                            <a href="/reports" @if(request()->route()->uri == 'reports') class='active' @endif>
                                <span class="icon" style="padding-left: 30px;"><i class="bi bi-journal-text"></i></span>
                                <span class="text">Reports</span> 
                            </a>
                        </div>
                        <a href="/change-password" @if(request()->route()->uri == 'change-password') class='active' @endif>
                            <span class="icon"><i class="bi bi-lock"></i></span>
                            <span class="text">Ubah Password</span> 
                        </a>
                        <a href="/logout">
                            <span class="icon"><i class="bi bi-box-arrow-left"></i> </span>
                            <span class="text">Log out</span> 
                        </a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>