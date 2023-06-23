@extends('layouts.app')

@section('content')
    <h1><b>Halaman Register</b></h1>
    <hr class="opacity-100 mb-5">

    <div class="col-lg-12 mx-3">
        <div class="card border border-black mx-auto" style="width: 320px;">
            <div class="card-body">
                <form action="" method="POST" class="mb-3">
                    <input type="text" class="form-control border border-black" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
                    <hr class="opacity-100">
                    <input type="email" class="form-control border border-black" name="email" placeholder="Email" autocomplete="off" required>
                    <hr class="opacity-100">
                    <input type="password" class="form-control border border-black" name="password" placeholder="Password" required>
                    <hr class="opacity-100">
                    <button class="btn btn-success w-100" type="submit"><b>Register</b></button>
                </form>
                <a href="{{ url('/login') }}" class="text-decoration-none text-success"><b>Sudah punya akun?</b></a>
            </div>
        </div>
    </div>

    <hr class="mt-5 opacity-100">
@endsection