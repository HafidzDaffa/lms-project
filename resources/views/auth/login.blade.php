{{-- <x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form method="post" action="{{ url('/login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>

                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="{{ route('password.request') }}">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
        <!-- /.login-box -->
    </body>
</x-laravel-ui-adminlte::adminlte-layout> --}}

@extends('layouts.index')

@section('meta_head')
    @include('layouts._partials.meta_head.auth')
@endsection

@section('content')
<div class="d-flex flex-wrap align-items-stretch h-100">
    <div class="col-12 col-md-4">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-sun-fill theme-icon-active me-2 opacity-70" data-theme-icon-active="bi-sun-fill" style="font-size: 20px;"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
                        <i class="bi bi-sun-fill me-2 opacity-80" data-theme-icon="bi-sun-fill"></i>
                        Light
                    </button>
                </li>
                <li>
                    <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
                        <i class="bi bi-moon-fill me-2 opacity-50" data-theme-icon="bi-moon-fill"></i>
                        Dark
                    </button>
                </li>
                <li>
                    <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto">
                        <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                        Auto
                    </button>
                </li>
            </ul>
        </div>
        <div class="m-5">
            <div class="d-flex justify-content-center align-items-center">
                <img class="rounded-circle" src="{{asset('assets/img/e-learning.jpg')}}" alt="Logo" style="width:130px; height:auto;">
            </div>
            <h2 class="font-weight-bold mt-5">E-Learning</h2>
            <p class="mt-2">Silahkan login untuk masuk ke e-learning</p>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" style="border-width: 2px;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" style="border-width: 2px;">
                    <div class="mt-2">
                        <a href="#" class="text-small">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                {{-- <div class="mt-3 text-center">
                    <span>Don't have an account? <a href="#" class="text-small">Register</a></span>
                </div> --}}
            </form>
        </div>
        <div class="d-flex justify-content-center align-items-end mt-5">
            <p class="text-muted">copyright © 2024 lms project</p>
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="position-relative w-100 h-100">
            <img class="w-100 h-100" src="{{asset('assets/img/learning.png')}}" alt="learning">
            <h1 class="position-absolute" style="top: 80%; right: 50%; color: white;">Selamat Datang di E-Learning</h1>
        </div>
    </div>
</div>

@endsection
