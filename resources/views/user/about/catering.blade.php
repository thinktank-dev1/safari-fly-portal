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
        <h3 class="about-user-heading">CATERING PREFERENCE</h3>
        <h5 class="about-user-sub-heading">ABOUT THE USER</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('user.save-catering-preference') }}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-12">
                    <input id="food" type="text" class="form-control form-control-sm about-user-input @error('food') is-invalid @enderror" name="food" value="{{ old('food') }}" autocomplete="food" placeholder="Food" autofocus>

                    @error('food')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="food_dislikes" type="text" class="form-control form-control-sm about-user-input @error('food_dislikes') is-invalid @enderror" name="food_dislikes" value="{{ old('food_dislikes') }}" autocomplete="food_dislikes" placeholder="Food Dislikes" autofocus>

                    @error('food_dislikes')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="vegetarian_vegan" type="text" class="form-control form-control-sm about-user-input @error('vegetarian_vegan') is-invalid @enderror" name="vegetarian_vegan" value="{{ old('vegetarian_vegan') }}" autocomplete="vegetarian_vegan" placeholder="Vegetarian / Vegan" autofocus>

                    @error('vegetarian_vegan')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="soft_drinks" type="text" class="form-control form-control-sm about-user-input @error('soft_drinks') is-invalid @enderror" name="soft_drinks" value="{{ old('soft_drinks') }}" autocomplete="soft_drinks" placeholder="Soft Drinks" autofocus>

                    @error('soft_drinks')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="juices" type="text" class="form-control form-control-sm about-user-input @error('juices') is-invalid @enderror" name="juices" value="{{ old('juices') }}" autocomplete="juices" placeholder="Juices" autofocus>

                    @error('juices')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="liquor" type="text" class="form-control form-control-sm about-user-input @error('liquor') is-invalid @enderror" name="liquor" value="{{ old('liquor') }}" autocomplete="liquor" placeholder="Liquor" autofocus>

                    @error('liquor')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input id="special_requests" type="text" class="form-control form-control-sm about-user-input @error('special_requests') is-invalid @enderror" name="special_requests" value="{{ old('special_requests') }}" autocomplete="special_requests" placeholder="Special Requests" autofocus>

                    @error('special_requests')
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