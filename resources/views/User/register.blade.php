@extends('layouts.user')

@section('title', 'Sign Up Pengaduan')

@section('header', 'register')

@yield('css')

@section('content')
<div class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="images/admin4.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="mb-4">
                <h3>Sign Up</h3>
                <p class="mb-4">Form Sign Up!</p>
            </div>
            @if (Session::has('pesan'))
            <div class="alert alert-danger mt-2">
                {{ Session::get('pesan') }}
            </div>
            @endif
            <form action="{{ route('pekat.register') }}" method="POST" id="pesan">
                @csrf
                <div class="form-group first">
                <label for="nik">NIK</label>
                <input type="number" name="nik" class="form-control" id="nik">
                </div>
                <div class="form-group first">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group first">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group first">
                <label for="ruangan">Ruangan</label>
                <input type="text" name="ruangan" class="form-control" id="ruangan">
                </div>
                <div class="form-group first">
                <label for="telp">No Telp</label>
                <input type="text" name="telp" class="form-control" id="telp">
                </div>
                <br>
                <input type="submit" value="Sign Up" class="btn btn-block btn-dark">
                </form>
                <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0">
                    <span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                </label>
                <span class="ml-auto">
                    <a href="#" class="forgot-pass">Forgot Password</a>
                </span>
                </div>
                <a href="{{ route('pekat.index') }}" class="btn btn-light text-dark mt-3" style="width: 100%">Back to Login</a>
                <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

                <div class="social-login">
                <a href="#" class="facebook">
                    <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                    <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                    <span class="icon-google mr-3"></span>
                </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection


