@extends('layouts.app')
@section('content')
@section('title', 'Next Of Kin')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/about-user-health/HEADING-ICON-HEALTH.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/HEADING-ICON-CATERING.png') }}">
        <h3 class="about-user-heading">ABOUT</h3>
        <h5 class="about-user-sub-heading">NEXT OF KIN</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col form-div">
        <form class="about-user-form" method="post" action="{{ route('user.save-next-of-kin') }}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-6">
                    <input id="fullname" type="text" class="form-control form-control-sm about-user-input @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" autocomplete="fullname" placeholder="Name & Surname" autofocus>

                    @error('fullname')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input id="relationship" type="text" class="form-control form-control-sm about-user-input @error('relationship') is-invalid @enderror" name="relationship" value="{{ old('relationship') }}" autocomplete="relationship" placeholder="Relationship" autofocus>

                    @error('relationship')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="address" type="text" class="form-control form-control-sm about-user-input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" placeholder="Address" autofocus>

                    @error('address')
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
                    <input id="cellphone" type="text" class="form-control form-control-sm about-user-input @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" autocomplete="cellphone" placeholder="Tel (Cell)" autofocus>

                    @error('cellphone')
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