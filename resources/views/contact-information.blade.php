@extends('layouts.app')
@section('content')
@section('title', 'Contact Information')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center">
        <img src="{{ asset('images/contact-information/HEADING-ICON-CONTACT.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
        <h3 class="about-user-heading">CONTACT INFORMATION</h3>
        <h5 class="about-user-sub-heading mb-4">PROVIDED</h5>
        <h6 class="contact-info-sub-heading">safari fly</h6>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-4 col text-center mb-4">
            <img src="{{ asset('images/contact-information/ICON-CONTACT NUMBER.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
            <p class="contact-info-text">contact number</p>
            <p class="contact-info-text-two"><a href="tel:+27 82 332 6025">+27 82 332 6025</a></p>
        </div>
        <div class="col-sm-4 text-center mb-4">
            <img src="{{ asset('images/contact-information/ICON-EMAIL.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
            <p class="contact-info-text">email</p>
            <p class="contact-info-text-two"><a href="mailto:info@safarifly.com">info@safarifly.com</a></p>
            <p class="contact-info-text-two"><a href="mailto:ilana@safarifly.com">ilana@safarifly.com</a></p>
        </div>
        <div class="col-sm-4 text-center mb-4">
            <img src="{{ asset('images/contact-information/ICON-BOOKINGS.png') }}" class="img-fluid mb-2" alt="{{ asset('images/overview/HEADING-ICON-CURRENT SAFARIS.png') }}">
            <p class="contact-info-text">bookings</p>
            <p class="contact-info-text-two"><a href="tel:+27 82 332 6025">+27 82 332 6025</a></p>
        </div>
        <div class="col-sm-12 text-center mb-4">
            <h6 class="contact-info-sub-heading">guide</h6>
            <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add</div>
            </button>
        </div>
        <div class="col-sm-12 text-center mb-4">
            <h6 class="contact-info-sub-heading">global rescue</h6>
            <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add</div>
            </button>
        </div>
    </div>
    @include('extensions.footer')
</main>
@endsection