@extends('layouts.app')
@section('content')
@section('title', 'Design Custom Trip')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/trip-about/HEADING-ICON-ABOUT YOU.png') }}" class="img-fluid mb-2" alt="{{ asset('images/trip-about/HEADING-ICON-ABOUT YOU.png') }}">
        <h3 class="about-user-heading">ABOUT YOU</h3>
        <h5 class="about-user-sub-heading">YOUR CUSTOM DESIGNED TRIP</h5>
        <p class="trip-about-text">Please complete this section and submit</p>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('custom-trip.design-about-user') }}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <input id="title" type="text" class="form-control form-control-sm about-user-input @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" placeholder="Title" autofocus>

                    @error('title')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="name" type="text" class="form-control form-control-sm about-user-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Name" autofocus>

                    @error('name')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
                <div class="col-6">
                    <input id="surname" type="text" class="form-control form-control-sm about-user-input @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" placeholder="Surname" autofocus>

                    @error('surname')
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
                    <input id="phone" type="text" class="form-control form-control-sm about-user-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <select id="comms_channel" class="form-select form-select-sm about-user-input @error('comms_channel') is-invalid @enderror" name="comms_channel" aria-label="Default select communication channel">
                        <option selected>Best time to contact you</option>
                        <option value="option">Option </option>
                        <option value="option I">Option I</option>
                        <option value="option II">Option II</option>
                        <option value="other">Other</option>
                    </select> 
                    @error('comms_channel')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="time" type="time" class="form-control form-control-sm about-user-input @error('time') is-invalid @enderror" name="time" required placeholder="" autofocus>

                    @error('time')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary auth-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('extensions.footer')
</main>
@endsection