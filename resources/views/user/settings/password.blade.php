@extends('layouts.app')
@section('content')
@section('title', 'Catering Prefence')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/about-user-catering/HEADING-ICON-CATERING.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/HEADING-ICON-CATERING.png') }}">
        <h3 class="about-user-heading">PASSWORD</h3>
        <h5 class="about-user-sub-heading">CUSTOM SETTINGS</h5>
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('user.save-catering-preference') }}">
            <div class="row g-3 align-items-center">
                <div class="col-12">
                    <input id="food" type="text" class="form-control form-control-sm about-user-input @error('food') is-invalid @enderror" name="food" value="{{ old('food') }}" autocomplete="food" placeholder="Current Password" autofocus>

                        <span class="invalid-feedback text-center" role="alert">
                        </span>
                </div>
                <div class="col-12">
                    <input id="food_dislikes" type="text" class="form-control form-control-sm about-user-input @error('food_dislikes') is-invalid @enderror" name="food_dislikes" value="{{ old('food_dislikes') }}" autocomplete="food_dislikes" placeholder="New Password" autofocus>

                        <span class="invalid-feedback text-center" role="alert">
                        </span>
                </div>
                <div class="col-12">
                    <input id="vegetarian_vegan" type="text" class="form-control form-control-sm about-user-input @error('vegetarian_vegan') is-invalid @enderror" name="vegetarian_vegan" value="{{ old('vegetarian_vegan') }}" autocomplete="vegetarian_vegan" placeholder="Verify New Password" autofocus>

                        <span class="invalid-feedback text-center" role="alert">
                        </span>
                </div>

                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary submit-btn">Update Password</button>
                </div>
            </div>
        </form>
    </div>
    @include('extensions.footer')
</main>
@endsection