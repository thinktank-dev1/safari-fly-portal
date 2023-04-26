@extends('layouts.app')
@section('content')
@section('title', 'Health')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/about-user-health/HEADING-ICON-HEALTH.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/HEADING-ICON-CATERING.png') }}">
        <h3 class="about-user-heading">HEALTH</h3>
        <h5 class="about-user-sub-heading">ABOUT THE USER</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col form-div">
        <form class="about-user-form" method="post" action="{{ route('user.save-health') }}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <input id="allergies" type="text" class="form-control form-control-sm about-user-input @error('allergies') is-invalid @enderror" name="allergies" value="{{ old('allergies') }}" autocomplete="allergies" placeholder="Allergies" autofocus>

                    @error('allergies')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="special_medication" type="text" class="form-control form-control-sm about-user-input @error('special_medication') is-invalid @enderror" name="special_medication" value="{{ old('special_medication') }}" autocomplete="special_medication" placeholder="Special Medication" autofocus>

                    @error('special_medication')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="blood_type" type="text" class="form-control form-control-sm about-user-input @error('blood_type') is-invalid @enderror" name="blood_type" value="{{ old('blood_type') }}" autocomplete="blood_type" placeholder="Blood Type" autofocus>

                    @error('vegetarian_vegan')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="disabilities" type="text" class="form-control form-control-sm about-user-input @error('disabilities') is-invalid @enderror" name="disabilities" value="{{ old('disabilities') }}" autocomplete="disabilities" placeholder="Disabilities" autofocus>

                    @error('soft_drinks')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <select id="travel_insurance" class="form-select form-select-sm about-user-input @error('travel_insurance') is-invalid @enderror" name="travel_insurance" aria-label="Default select travel insurance">
                        <option selected>Travel Insurance</option>
                        <option value="option">Option</option>
                        <option value="option II">Option II</option>
                        <option value="other">Other</option>
                    </select> 

                    @error('travel_insurance')
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