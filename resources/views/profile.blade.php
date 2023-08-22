@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h2>Selamat datang, Anda login sebagai pegawais</h2>

    <div class="container-fluid">
    <div class="my-5 row justify-content-left">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Data Pegawai') }}</div>

                <div class="card-body">
                    
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4">
                                <img src="{{ asset('storage/photos/') }}" class="img-thumbnail rounded mx-auto d-block">
                    </div>

                    <div class="col-md-8">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Nama Pegawai</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name">

                
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Jabatan</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tanggal masuk" class="col-md-4 col-form-label text-md-end">Tanggal Masuk</label>

                                    <div class="col-md-6">
                                        <input id="tanggal masuk" type="tanggal masuk" class="form-control @error('tanggal masuk') is-invalid @enderror" name="tanggal masuk" autocomplete="tanggal masuk">

                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>

                                    <div class="col-md-6">
                                        <input id="status" type="status" class="form-control" name="status" autocomplete="status">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Change Profile Photo</label>

                                    <div class="col-md-6">
                                        <input id="photo" type="file" class="form-control" name="photo">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection