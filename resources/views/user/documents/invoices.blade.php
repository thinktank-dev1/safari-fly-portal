@extends('layouts.app')
@section('content')
@section('title', 'Invoices')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-5">
        <img src="{{ asset('images/overview/HEADING-ICON-ITINERARY.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-ITINERARY.png') }}">
        <h3 class="about-user-heading">INVOICES</h3>
        <h5 class="about-user-sub-heading">LIST OF USER INVOICES</h5>
    </div>
    <div class="col mb-5 about-user-form">
        <div class="row display-flex-center">
            <div class="col-sm-6 mb-4">
                <div class="">
                    <div class="card-body">
                        <h5 class="safari-card-title">Outstanding Invoices</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4 align-end">
                <div class="">
                    <div class="card-body">
                        <a href="" type="button" class="btn btn-primary auth-btn btn-small-font">Pay Outstanding Invoices</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row display-flex-center">
            <div class="col-sm-6 mb-4">
                <div class="">
                    <div class="card-body">
                        <div class="overview-text">
                            03-02-2023
                        </div>
                        <div class="overview-text">
                            03-02-2023
                        </div>
                        <div class="overview-text">
                            03-02-2023
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4 align-end">
                <div class="">
                    <div class="card-body">
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row display-flex-center">
            <div class="col-sm-6 mb-4">
                <div class="">
                    <div class="card-body">
                        <h5 class="safari-card-title">Paid Invoices</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4 align-end">
                <div class="">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row display-flex-center">
            <div class="col-sm-6 mb-4">
                <div class="">
                    <div class="card-body">
                        <div class="overview-text">
                            03-02-2023
                        </div>
                        <div class="overview-text">
                            03-02-2023
                        </div>
                        <div class="overview-text">
                            03-02-2023
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4 align-end">
                <div class="">
                    <div class="card-body">
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                        <div>
                            <a class="travel-documents-anchor" href=""><span class="download-span">download document <i><img src="{{ asset('images/travel-documents/ICON-DOWNLOAD.png') }}" class="img-fluid"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('extensions.footer')
</main>
@endsection