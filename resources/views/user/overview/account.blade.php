@extends('layouts.app')
@section('content')
@section('title', 'Account History')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-5">
        <img src="{{ asset('images/overview/HEADING-ICON-ITINERARY.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-ITINERARY.png') }}">
        <h3 class="about-user-heading">Account History</h3>
        <h5 class="about-user-sub-heading">USER ACCOUNT</h5>
        <p class="overview-text">Welcome to your Safari Fly member page. We're excited that you've joined us</p>
    </div>
    <div class="col mb-5 about-user-form">
        <div class="row display-flex-center margin-extended">
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="display-flex-center icon-peaking">
                            <img src="{{ asset('images/account/ICONS-TRAVEL DOCS.png') }}">
                        </div>
                        <h5 class="safari-card-title account-heading">My Travel Documents</h5>
                        <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary auth-btn btn-small-font">View Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="display-flex-center icon-peaking">
                            <img src="{{ asset('images/account/ICONS-LIST OF INVOICES.png') }}">
                        </div>
                        <h5 class="safari-card-title account-heading">My lists of Invoices</h5>
                        <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary auth-btn btn-small-font">View Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('extensions.footer')
</main>
@endsection