@extends('layouts.app')
@section('content')
@section('title', 'About User')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <i class="bi bi-info-circle"></i>
        <h3 class="about-user-heading">ABOUT</h3>
        <h5 class="about-user-sub-heading">ABOUT THE USER</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('user.save-about') }}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <input id="first_name" type="text" class="form-control form-control-sm about-user-input @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First Name*" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="last_name" type="text" class="form-control form-control-sm about-user-input @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name*" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
                <div class="col-6">
                    <input id="birth_date" type="date" class="form-control form-control-sm about-user-input @error('birth_date') is-invalid @enderror" name="birth_date" placeholder="Birth Date" autofocus>

                    @error('birth_date')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <select id="sex" class="form-select form-select-sm about-user-input @error('sex') is-invalid @enderror" name="sex" aria-label="Default select gender">
                        <option selected>Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select> 

                    @error('sex')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="passport_number" type="text" class="form-control form-control-sm about-user-input @error('passport_number') is-invalid @enderror" name="passport_number" value="{{ old('passport_number') }}" required autocomplete="passport_number" placeholder="Passport Number*" autofocus>

                    @error('passport_number')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="expire_date" type="date" class="form-control form-control-sm about-user-input @error('expire_date') is-invalid @enderror" name="expire_date" required placeholder="Expire Date" autofocus>

                    @error('expire_date')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <select id="marital_status" class="form-select form-select-sm about-user-input @error('marital_status') is-invalid @enderror" name="marital_status" aria-label="Default select marital status">
                        <option selected>Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                    </select> 

                    @error('marital_status')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="occupassion" type="text" class="form-control form-control-sm about-user-input @error('occupassion') is-invalid @enderror" name="occupassion" value="{{ old('occupassion') }}" autocomplete="occupassion" placeholder="Occupassion" autofocus>

                    @error('occupassion')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="home_address" type="text" class="form-control form-control-sm about-user-input @error('home_address') is-invalid @enderror" name="home_address" value="{{ old('home_address') }}" autocomplete="home_address" placeholder="Home Address" autofocus>

                    @error('home_address')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="cellphone" type="text" class="form-control form-control-sm about-user-input @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" autocomplete="cellphone" placeholder="Tell (Cell)" autofocus>

                    @error('cellphone')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="telephone" type="text" class="form-control form-control-sm about-user-input @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" placeholder="Tel (Home)" autofocus>

                    @error('telephone')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="email" type="email" class="form-control form-control-sm about-user-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*" autofocus>

                    @error('email')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="comms_channel" type="text" class="form-control form-control-sm about-user-input @error('comms_channel') is-invalid @enderror" name="comms_channel" value="{{ old('comms_channel') }}" autocomplete="comms_channel" placeholder="Comms Channel" autofocus>

                    @error('comms_channel')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary submit-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('extensions.footer')
</main>
@endsection