@extends('layouts.app')
@section('content')
@section('title', 'Current Safaris')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-5">
        <img src="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
        <h3 class="about-user-heading">CURRENT SAFARIS</h3>
        <h5 class="about-user-sub-heading">OVERVIEW</h5>
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
    @include('extensions.footer')
</main>
@endsection