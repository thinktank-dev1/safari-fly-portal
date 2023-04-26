@extends('layouts.app')
@section('content')
@section('title', 'Additional Documents')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/additional-documents/HEADING-ICON-ADDITIONAL DOCS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-TRAVEL DOCS.png') }}">
        <h3 class="about-user-heading">ADDITIONAL DOCUMENTS</h3>
        <h5 class="about-user-sub-heading">USER INFORMATION</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
        <form class="about-user-form" method="post" action="{{ route('user.save-additional-documents') }}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-12">
                    <input class="form-control form-control-lg about-user-input @error('additional-information') is-invalid @enderror" id="additional-information" name="additional-information" type="text" value="{{ old('additional-information') }}" autocomplete="additional-information" placeholder="Additional Information" autofocus>

                    @error('additional-information')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input class="form-control form-control-sm about-user-input @error('additional-document') is-invalid @enderror" id="additional-document" name="additional-document" type="file">

                    @error('additional-document')
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