@extends('layouts.guest')
@section('content')
@section('title', 'Login')
<div class="container-xxl">
    <div class="col-md-12 d-flex justify-content-center">
        <div class="form-main d-xl-block d-lg-block d-md-block d-sm-none mt-5">
            <div class="form-container a-container" id="a-container">
                <form class="form" id="a-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="form_title title">SIGN IN</h2>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*">

                                @error('email')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center input-group mb-3" id="show_hide_password">
                            <input id="password" type="password" class="form-control password-control-2 @error('password') is-invalid @enderror" name="password" required placeholder="Password*" autocomplete="current-password" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <a href="" class="input-group-text" id="basic-addon1"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            @error('password')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-1">
                        <button type="submit" class="btn login-btn auth-btn btn-outline-primary">
                            {{ __('SIGN IN') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="form-container b-container" id="b-container">
                <form class="form" id="b-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="form_title title">SIGN UP</h2>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                            <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name*" autofocus>

                            @error('name')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-3">
                            <input id="surname" type="text" class="form-control form-control-sm @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder="Surname*" autofocus>

                            @error('name')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-3">
                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*">

                            @error('email')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center input-group mb-3" id="show_hide_password">
                            <input id="password" type="password" class="form-control password-control @error('password') is-invalid @enderror" name="password" required placeholder="Password*" autocomplete="current-password" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <a href="" class="input-group-text" id="basic-addon1"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center input-group mb-3" id="show_hide_password">
                            <input id="password-confirm" type="password" class="form-control password-control" placeholder="Confirm Password*" name="password_confirmation" autocomplete="new-password" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <a href="" class="input-group-text" id="basic-addon1"><i class="bi bi-eye-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-1">
                        <button type="submit" class="btn login-btn auth-btn btn-outline-primary">
                            {{ __('SIGN UP') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div>
                <div class="switch__circle switch__circle--t"></div>
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Welcome Back !</h2>
                    <button class="btn btn-primary switch-btn">SIGN UP</button>
                </div>
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">Hello Friend !</h2>
                    <button class="btn btn-primary switch-btn">SIGN IN</button>
                </div>
            </div>
        </div>

        <div class="card login-card d-xl-none d-lg-none d-md-none d-sm-block">
            <div class="col header d-flex justify-content-center"><p class="login-heading">LOGIN</p></div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                            <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name*" autofocus>

                            @error('name')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-3">
                            <input id="surname" type="text" class="form-control form-control-sm @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder="Surname*" autofocus>

                            @error('name')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="d-flex justify-content-center input-group mb-3" id="show_hide_password">
                            <input id="password" type="password" class="form-control password-control @error('password') is-invalid @enderror" name="password" required placeholder="Password*" autocomplete="current-password" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <a href="" class="input-group-text" id="basic-addon1"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            @error('password')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-center mb-1">
                        <button type="submit" class="btn login-btn auth-btn btn-outline-primary">
                            {{ __('SIGN IN') }}
                        </button>
                    </div>

                    <div class="col-12 d-flex justify-content-center mb-3">
                        @if (Route::has('register'))
                            <p class="register-text">
                                Not a member yet? 
                                <a class="btn btn-primary-link" href="{{ route('register') }}">
                                    {{ __('Sign up') }}
                                </a>
                            <p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

