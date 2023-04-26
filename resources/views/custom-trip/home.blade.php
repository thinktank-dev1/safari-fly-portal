@extends('layouts.app')
@section('content')
@section('title', 'Custom Trip')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 trip-section">
  <div class="col social-div">
    <a href="" class="social-media-anchor" target="_blank"><i class="bi bi-facebook"></i></a>
    <a href="" class="social-media-anchor" target="_blank"><i class="bi bi-instagram"></i></a>
    <a href="" class="social-media-anchor" target="_blank"><i class="bi bi-tiktok"></i></a>
    <a href="" class="social-media-anchor" target="_blank"><i class="bi bi-envelope-fill"></i></a>
  </div>
  <div class="col trip-welcome-div">
    <h4 class="trip-welcome-heading">your custom</h4>
    <h3 class="trip-welcome-sub-heading">Design Trip</h3>
    <p class="trip-welcome-text">We're excited that you want to join us</p>
    <p class="trip-welcome-text-two">
      This Trip Design Form will give us a better understanding of what you are looking for and what you want to experience. 
      We will go through this form during your indepth personall consultation, but please complete the first section so we know where to start.
    </p>
    <p class="trip-welcome-text-two">
      We will create a profile using your information, and will send you the login details. 
      All the information from this form, your personal consultation will be loaded onto your profile.
    </p>

    <a href="{{ route('custom-trip.design') }}" class="btn btn-primary safari-btn mt-3">LET's GET STARTED</a>
  </div>
</main>
@endsection


