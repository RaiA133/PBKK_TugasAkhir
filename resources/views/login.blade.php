@extends('layouts.app')

@section('content')
    <h1><b>Halaman Login</b></h1>
    <hr class="opacity-100 mb-5">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <b>{{ session('success') }}</b>
        </div>
    @endif

    <div class="col-lg-12 mx-3">
        <div class="card border border-black mx-auto" style="width: 320px;">
            <div class="card-body">
                <form action="" method="POST" class="mb-3">
                    <input type="email" class="form-control border border-black" name="email" placeholder="Email" autocomplete="off" required>
                    <hr class="opacity-100">
                    <input type="password" class="form-control border border-black" name="passwod" placeholder="Password" name="password" autocomplete="off" required>
                    <hr class="opacity-100">
                    <button class="btn btn-success w-100" type="submit"><b>Login</b></button>
                </form>
                <a href="{{ url('/register') }}" class="text-decoration-none text-success"><b>Belum punya akun?</b></a>
            </div>
        </div>
    </div>

    <hr class="mt-5 opacity-100">
@endsection