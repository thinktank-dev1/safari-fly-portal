@extends('layouts.app')
@section('content')
@section('title', 'Members')
<main class="col-md-6 ms-sm-auto col-lg-6 px-md-4 about-section">
    <div class="col social-div-two">
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-tiktok"></i></a>
        <a href="" class="social-media-anchor-two" target="_blank"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <div class="col text-center mb-4">
        <img src="{{ asset('images/member/ICON-HEADING-ADD MEMBER.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/HEADING-ICON-CATERING.png') }}">
        <h3 class="about-user-heading">ADD MEMBERS</h3>
        <h5 class="about-user-sub-heading">TO YOUR PROFILE</h5>
        @if(Session::has('message'))
            <div class="alert alert-success mt-4">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col">
         <form method="post" action="{{ route('user.save-member') }}" class="about-user-form">
            @csrf
            <fieldset class="wizard-fieldset fieldset-one show">
                <div class="row g-3 align-items-center">
                    <div class="col-6">
                        <input id="fullname" type="text" class="form-control form-control-sm about-user-input @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" autocomplete="fullname" placeholder="Name & Surname" autofocus>

                        @error('fullname')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="relationship" type="text" class="form-control form-control-sm about-user-input @error('relationship') is-invalid @enderror" name="relationship" value="{{ old('relationship') }}" autocomplete="relationship" placeholder="Relationship" autofocus>

                        @error('relationship')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input id="address" type="text" class="form-control form-control-sm about-user-input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" placeholder="Address" autofocus>

                        @error('address')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="telephone" type="text" class="form-control form-control-sm about-user-input @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" placeholder="Tel (Home)" autofocus>

                        @error('telephone')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="cellphone" type="text" class="form-control form-control-sm about-user-input @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" autocomplete="cellphone" placeholder="Tel (Cell)" autofocus>

                        @error('cellphone')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row align-items-center display-flex-center">
                            <div class="col-3 text-center">
                                <img src="{{ asset('images/member/ICON-CATERING.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/ICON-CATERING.png') }}">
                                <h3 class="member-heading">ABOUT</h3>
                                <h5 class="member-sub-heading">Catering Preference</h5>
                            </div>
                            <div class="col-3 text-center">
                                <img src="{{ asset('images/member/ICON-HEALTH.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/ICON-HEALTH.png') }}">
                                <h3 class="member-heading">ABOUT</h3>
                                <h5 class="member-sub-heading">Health</h5>
                            </div>
                            <div class="col-3 text-center">
                                <img src="{{ asset('images/member/ICON-NEXT OF KIN.png') }}" class="img-fluid mb-2" alt="{{ asset('images/about-user/ICON-NEXT OF KIN.png') }}">
                                <h3 class="member-heading">ABOUT</h3>
                                <h5 class="member-sub-heading">Next of kin</h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <a href="javascript:;" class="btn form-wizard-next-btn btn-outline-primary auth-btn">Next</a>
                </div>
            </fieldset>	
            <fieldset class="wizard-fieldset fieldset-two">
                <div class="row g-3 align-items-center">
                    <div class="col-12 text-center">
                        <h3 class="member-heading">MEMBER</h3>
                        <h5 class="member-sub-heading">Catering Preference</h5>
                    </div>
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
                </div>
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <a href="javascript:;" class="btn form-wizard-previous-btn btn-outline-primary auth-btn">Previous</a>
                    <a href="javascript:;" class="btn form-wizard-next-btn btn-outline-primary auth-btn">Next</a>
                </div>
            </fieldset>	
            <fieldset class="wizard-fieldset fieldset-three">
                <div class="row g-3 align-items-center">
                    <div class="col-12 text-center">
                        <h3 class="member-heading">MEMBER</h3>
                        <h5 class="member-sub-heading">Health</h5>
                    </div>
                    <div class="col-6">
                        <input id="allergies" type="text" class="form-control form-control-sm about-user-input @error('allergies') is-invalid @enderror" name="allergies" value="{{ old('allergies') }}" autocomplete="allergies" placeholder="Allergies" autofocus>

                        @error('allergies')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="special_medication" type="text" class="form-control form-control-sm about-user-input @error('special_medication') is-invalid @enderror" name="special_medication" value="{{ old('special_medication') }}" autocomplete="special_medication" placeholder="Special Medication" autofocus>

                        @error('special_medication')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="blood_type" type="text" class="form-control form-control-sm about-user-input @error('blood_type') is-invalid @enderror" name="blood_type" value="{{ old('blood_type') }}" autocomplete="blood_type" placeholder="Blood Type" autofocus>

                        @error('vegetarian_vegan')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="disabilities" type="text" class="form-control form-control-sm about-user-input @error('disabilities') is-invalid @enderror" name="disabilities" value="{{ old('disabilities') }}" autocomplete="disabilities" placeholder="Disabilities" autofocus>

                        @error('soft_drinks')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <select id="travel_insurance" class="form-select form-select-sm about-user-input @error('travel_insurance') is-invalid @enderror" name="travel_insurance" aria-label="Default select travel insurance">
                            <option selected>Travel Insurance</option>
                            <option value="option">Option</option>
                            <option value="option II">Option II</option>
                            <option value="other">Other</option>
                        </select> 

                        @error('travel_insurance')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <a type="submit" class="btn form-wizard-previous-btn btn-outline-primary auth-btn">Previous</a>
                    <a href="javascript:;" class="btn form-wizard-next-btn btn-outline-primary auth-btn">Next</a>
                </div>
            </fieldset>	
            <fieldset class="wizard-fieldset fieldset-four">
				<div class="row g-3 align-items-center">
                    <div class="col-12 text-center">
                        <h3 class="member-heading">MEMBER</h3>
                        <h5 class="member-sub-heading">Next of kin</h5>
                    </div>
                    <div class="col-6">
                        <input id="m_fullname" type="text" class="form-control form-control-sm about-user-input @error('m_fullname') is-invalid @enderror" name="m_fullname" value="{{ old('m_fullname') }}" autocomplete="m_fullname" placeholder="Name & Surname" autofocus>

                        @error('m_fullname')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="m_relationship" type="text" class="form-control form-control-sm about-user-input @error('m_relationship') is-invalid @enderror" name="m_relationship" value="{{ old('m_relationship') }}" autocomplete="m_relationship" placeholder="Relationship" autofocus>

                        @error('m_relationship')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input id="m_address" type="text" class="form-control form-control-sm about-user-input @error('m_address') is-invalid @enderror" name="m_address" value="{{ old('m_address') }}" autocomplete="m_address" placeholder="Address" autofocus>

                        @error('m_address')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="m_telephone" type="text" class="form-control form-control-sm about-user-input @error('m_telephone') is-invalid @enderror" name="m_telephone" value="{{ old('m_telephone') }}" autocomplete="m_telephone" placeholder="Tel (Home)" autofocus>

                        @error('m_telephone')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="m_cellphone" type="text" class="form-control form-control-sm about-user-input @error('m_cellphone') is-invalid @enderror" name="m_cellphone" value="{{ old('m_cellphone') }}" autocomplete="m_cellphone" placeholder="Tel (Cell)" autofocus>

                        @error('m_cellphone')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>	
                <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                    <a href="javascript:;" class="btn form-wizard-previous-btn btn-outline-primary auth-btn">Previous</a>
                    <button type="submit" class="btn btn-outline-primary submit-btn">Submit</button>
                </div>		
            </fieldset>	
        </form>
    </div>
    @include('extensions.footer')
</main>
@endsection