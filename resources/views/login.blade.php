@extends('layouts.app')

@section('content')
    <h1><b>Halaman Login</b></h1>
    <hr class="opacity-100 mb-5">

    <div class="col-lg-12 mx-3">
        <div class="card border border-black mx-auto" style="width: 320px;">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST" class="mb-3">
                    @csrf
                    <input type="email" class="form-control border border-black" name="email" placeholder="Email" autocomplete="off" required>
                    <hr class="opacity-100">
                    <input type="password" class="form-control border border-black" name="password" placeholder="Password" autocomplete="off" required>
                    <hr class="opacity-100">

                    {{-- ALERT REGISTRASI BERHASIL --}}
                    <div class="form-outline">
                        @if(Session::has('success'))
                            <div class="alert alert-success py-1">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                    </div>

                    <button class="btn btn-success w-100" type="submit"><b>Login</b></button>
                </form>
                <a href="{{ url('/register') }}" class="text-decoration-none text-success"><b>Belum punya akun?</b></a>
            </div>
        </div>
    </div>

    <hr class="mt-5 opacity-100">
@endsection