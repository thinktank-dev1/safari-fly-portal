@extends('layouts.app')
@section('content')
@section('title', 'Previous Safaris')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section ">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="about-user-form">
    <div class="col text-center mb-5">
        <img src="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
        <h3 class="about-user-heading">Overview</h3>
        <h5 class="about-user-sub-heading mb-3">PREVIOUS SAFARIS</h5>
        <p class="overview-text">Welcome to your Safari Fly member page. We're excited that you've joined us</p>
    </div>
    <div class="col mb-5">
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card safari-card">
                <div class="card-body">
                    <h5 class="safari-card-title">cape town and victoria falls safari</h5>
                    <p class="safari-card-text">6 day tour</p>
                    <p class="safari-card-text">from $4600 per person</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('extensions.footer')
</main>
@endsection