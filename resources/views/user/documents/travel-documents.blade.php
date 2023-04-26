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
    <div class="col text-center mb-3">
        <img src="{{ asset('images/overview/HEADING-ICON-TRAVEL DOCS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-TRAVEL DOCS.png') }}">
        <h3 class="about-user-heading">TRAVEL DOCUMENTS</h3>
        <h5 class="about-user-sub-heading">PREVIOUS SAFARIS</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
            </div>
        </div>
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor" href=""><span class="download-span">download document <i class="bi bi-box-arrow-down"></i></span></a>
            </div>
        </div>
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor" href=""><span class="download-span">download document <i class="bi bi-box-arrow-down"></i></span></a>
            </div>
        </div>
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor" href=""><span class="download-span">download document <i class="bi bi-box-arrow-down"></i></span></a>
            </div>
        </div>
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor" href=""><span class="download-span">download document <i class="bi bi-box-arrow-down"></i></span></a>
            </div>
        </div>
        <div class="col-sm-12 mb-3">
            <div class="travel-documents-card">
                <p class="travel-text">Flights</p>
                <a class="travel-documents-anchor text-left" href=""><span class="download-span">download document <i class="bi bi-box-arrow-down"></i></span></a>
            </div>
        </div>
    </div>
    @include('extensions.footer')
</main>
@endsection