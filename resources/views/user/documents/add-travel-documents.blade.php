@extends('layouts.app')
@section('content')
@section('title', 'Travel Documents')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/overview/HEADING-ICON-TRAVEL DOCS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-TRAVEL DOCS.png') }}">
        <h3 class="about-user-heading">TRAVEL DOCUMENTS</h3>
        <h5 class="about-user-sub-heading">CURRENT SAFARIS</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('user.save-documents') }}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('flights') is-invalid @enderror" id="flights" name="flights" type="file">

                    @error('flights')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('booking_confirmation') is-invalid @enderror" id="booking_confirmation" name="booking_confirmation" type="file">

                    @error('booking_confirmation')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('passport') is-invalid @enderror" id="passport" name="passport" type="file">

                    @error('passport')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('travel_insurance') is-invalid @enderror" id="ftravel_insurance" name="travel_insurance" type="file">

                    @error('travel_insurance')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('global_rescue') is-invalid @enderror" id="global_rescue" name="global_rescue" type="file">

                    @error('global_rescues')
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