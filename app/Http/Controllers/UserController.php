<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Validator;
use Carbon\Carbon;
use App\Models\AboutUser;
use App\Models\AboutMember;
use App\Models\TravelDocuments;
use App\Models\AboutUserHealth;
use App\Models\AboutUserCatering;
use App\Models\AboutUserNextOfKin;
use App\Models\AdditionalInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request as Upload;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_user_catering()
    {
        return view('user.about.catering');
    }

    public function about_user_health()
    {
        return view('user.about.health');
    }

    public function about_user_next_of_kin()
    {
        return view('user.about.next-of-kin');
    }

    public function members()
    {
        return view('user.about.members');
    }

    public function travel_documents()
    {
        return view('user.documents.travel-documents');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_about_user()
    {
        return view('user.about.create-about-user');
    }

    public function create_travel_documents()
    {
        return view('user.documents.add-travel-documents');
    }

    public function add_additional_documents()
    {
        return view('user.documents.add-additional-documents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store_about()
    {
        $validated = Validator::make(Request::all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['nullable', 'date'],
            'sex' => ['nullable', 'string', 'max:255'],
            'passport_number' => ['required', 'string', 'min:13', 'max:255', 'unique:about_users'],
            'expire_date' => ['required', 'date'],
            'marital_status' => ['nullable', 'string', 'max:255'],
            'occupassion' => ['nullable', 'string', 'max:255'],
            'home_address' => ['nullable', 'string', 'max:255'],
            'cellphone' => ['nullable', 'string', 'min:10', 'max:10'],
            'telephone' => ['nullable', 'string', 'min:10', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:about_users'],
            'comms_channel' => ['nullable', 'string', 'max:255']
        ]);

        $user_id = Auth::id();
        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $about_user = AboutUser::create([
                'user_id' => $user_id,
                'first_name' => Request::input('first_name'),
                'last_name' => Request::input('last_name'),
                'birth_date' => Request::input('birth_date'),
                'sex' => Request::input('sex'),
                'passport_number' => Request::input('passport_number'),
                'expire_date' => Request::input('expire_date'),
                'marital_status' => Request::input('marital_status'),
                'occupassion' => Request::input('occupassion'),
                'home_address' => Request::input('home_address'),
                'cellphone' => Request::input('cellphone'),
                'telephone' => Request::input('telephone'),
                'email' => Request::input('email'),
                'comms_channel' => Request::input('comms_channel'),
            ]);

            return back()->with('message', 'Details added successfully');
        }
    }

    public function store_catering_preference()
    {
        $validated = Validator::make(Request::all(), [
            'food' => ['nullable', 'string', 'max:255'],
            'food_dislikes' => ['nullable', 'string', 'max:255'],
            'vegetarian_vegan' => ['nullable', 'string', 'max:255'],
            'soft_drinks' => ['nullable', 'string', 'max:255'],
            'juices' => ['nullable', 'string', 'max:255'],
            'liquor' => ['nullable', 'string', 'max:255']
        ]);

        $user_id = Auth::id();

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $about_user_catering = AboutUserCatering::create([
                'user_id' => $user_id,
                'food' => Request::input('food'),
                'food_dislikes' => Request::input('food_dislikes'),
                'vegetarian_vegan' => Request::input('vegetarian_vegan'),
                'soft_drinks' => Request::input('soft_drinks'),
                'juices' => Request::input('juices'),
                'liquor' => Request::input('liquor'),
            ]);

            return back()->with('message', 'Catering details added successfully');
        }
    }

    public function store_health()
    {
        $validated = Validator::make(Request::all(), [
            'allergies' => ['nullable', 'string', 'max:255'],
            'special_medication' => ['nullable', 'string', 'max:255'],
            'blood_type' => ['nullable', 'string', 'max:255'],
            'disabilities' => ['nullable', 'string', 'max:255'],
            'travel_insurance' => ['nullable', 'string', 'max:255']
        ]);

        $user_id = Auth::id();

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $about_user_health = AboutUserHealth::create([
                'user_id' => $user_id,
                'allergies' => Request::input('allergies'),
                'special_medication' => Request::input('special_medication'),
                'blood_type' => Request::input('blood_type'),
                'disabilities' => Request::input('disabilities'),
                'travel_insurance' => Request::input('travel_insurance'),
            ]);

            return back()->with('message', 'Health details added successfully');
        }
    }

    public function store_next_of_kin()
    {
        $validated = Validator::make(Request::all(), [
            'fullname' => ['nullable', 'string', 'max:255'],
            'relationship' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'telephone' => ['nullable', 'string', 'min:10', 'max:10'],
            'cellphone' => ['nullable', 'string', 'min:10', 'max:10']
        ]);

        $user_id = Auth::id();

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $about_user_next_of_kin = AboutUserNextOfKin::create([
                'user_id' => $user_id,
                'fullname' => Request::input('fullname'),
                'relationship' => Request::input('relationship'),
                'address' => Request::input('address'),
                'telephone' => Request::input('telephone'),
                'cellphone' => Request::input('cellphone'),
            ]);

            return back()->with('message', 'Next of kin added successfully');
        } 
    }

    public function store_member()
    {
        $validated = Validator::make(Request::all(), [
            /** Member validation */
            'fullname' => ['nullable', 'string', 'max:255'],
            'relationship' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'telephone' => ['nullable', 'string', 'min:10', 'max:10'],
            'cellphone' => ['nullable', 'string', 'min:10', 'max:10'],

            /** Member catering preference validation */
            'food' => ['nullable', 'string', 'max:255'],
            'food_dislikes' => ['nullable', 'string', 'max:255'],
            'vegetarian_vegan' => ['nullable', 'string', 'max:255'],
            'soft_drinks' => ['nullable', 'string', 'max:255'],
            'juices' => ['nullable', 'string', 'max:255'],
            'liquor' => ['nullable', 'string', 'max:255'],

            /** Member health validation */
            'allergies' => ['nullable', 'string', 'max:255'],
            'special_medication' => ['nullable', 'string', 'max:255'],
            'blood_type' => ['nullable', 'string', 'max:255'],
            'disabilities' => ['nullable', 'string', 'max:255'],
            'travel_insurance' => ['nullable', 'string', 'max:255'],

            /** Member next of kin validation */
            'm_fullname' => ['nullable', 'string', 'max:255'],
            'm_relationship' => ['nullable', 'string', 'max:255'],
            'm_address' => ['nullable', 'string', 'max:255'],
            'm_telephone' => ['nullable', 'string', 'min:10', 'max:10'],
            'm_cellphone' => ['nullable', 'string', 'min:10', 'max:10']
        ]);

        $user_id = Auth::id();

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            /** Create member */
            $about_member = AboutMember::create([
                'user_id' => $user_id,
                'fullname' => Request::input('fullname'),
                'relationship' => Request::input('relationship'),
                'address' => Request::input('address'),
                'telephone' => Request::input('telephone'),
                'cellphone' => Request::input('cellphone'),
            ]);

            /** Create member catering preference */
            AboutUserCatering::create([
                'user_id' => $user_id,
                'member_id' => $about_member->id,
                'food' => Request::input('food'),
                'food_dislikes' => Request::input('food_dislikes'),
                'vegetarian_vegan' => Request::input('vegetarian_vegan'),
                'soft_drinks' => Request::input('soft_drinks'),
                'juices' => Request::input('juices'),
                'liquor' => Request::input('liquor'),
            ]);
            
            /** Create member health */
            AboutUserHealth::create([
                'user_id' => $user_id,
                'member_id' => $about_member->id,
                'allergies' => Request::input('allergies'),
                'special_medication' => Request::input('special_medication'),
                'blood_type' => Request::input('blood_type'),
                'disabilities' => Request::input('disabilities'),
                'travel_insurance' => Request::input('travel_insurance'),
            ]);

            /** Create member next of kin*/
            AboutUserNextOfKin::create([
                'user_id' => $user_id,
                'member_id' => $about_member->id,
                'fullname' => Request::input('m_fullname'),
                'relationship' => Request::input('m_relationship'),
                'address' => Request::input('m_address'),
                'telephone' => Request::input('m_telephone'),
                'cellphone' => Request::input('m_cellphone'),
            ]);

            return back()->with('message', 'Member added successfully');
        } 
    }

    public function store_documents(Upload $request)
    {
        $validated = Validator::make($request->all(), [
            'flights' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
            'booking_confirmation' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
            'passport' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
            'travel_insurance' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
            'global_rescue' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
        ]);

        $date = Carbon::now();

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $flight = $request->file('flights');
            $booking_confirmation = $request->file('booking_confirmation');
            $passport = $request->file('passport');
            $travel_insurance = $request->file('travel_insurance');
            $global_rescue = $request->file('global_rescue');

            if($flight){
                if($flight->isValid()){
                    $flight_name = 'Flight'.$date.'.'.$flight->getClientOriginalExtension();
                    $flights_url =  Storage::disk('public')->putFile('flights', $flight);
                }    
            }

            if($booking_confirmation){
                if($booking_confirmation->isValid()){
                    $booking_confirmation_url = Storage::disk('public')->putFile('bookings', $booking_confirmation);
                }
            }

            if($passport){
                if($passport->isValid()){
                    $passport_url = Storage::disk('public')->putFile('passports', $passport);
                }
            }

            if($travel_insurance){
                if($travel_insurance->isValid()){
                    $travel_insurance_url = Storage::disk('public')->putFile('insurance', $travel_insurance);
                }
            }

            if($global_rescue){
                if($global_rescue->isValid()){
                    $global_rescue_url = Storage::disk('public')->putFile('global-rescue', $global_rescue);
                }
            }

            $user_id = Auth::id();

            $travel_documents = TravelDocuments::create([
                'user_id' => $user_id,
                'flights' => $flights_url,
                'booking_confirmation' => $booking_confirmation_url,
                'passport' => $passport_url,
                'travel_insurance' => $travel_insurance_url,
                'global_rescue' => $global_rescue_url,
            ]);

            return back()->with('message', 'Travel documents uploaded successfully');

        }
    }

    public function store_additional_documents(Upload $request)
    {
        $validated = Validator::make($request->all(), [
            'additional-information' => ['nullable'],
            'additional-document' => ['nullable', 'file', 'max:10000', 'mimes:pdf,doc,docx,jpg,png'],
        ]);

        if($validated->fails()){
            return back()->withErrors($validated)->withInput();
        }else{
            $user_id = Auth::id();
            $additional_document = $request->file('additional-document');

            if($additional_document ){
                if($additional_document->isValid()){
                    $additional_document_url = Storage::disk('public')->putFile('additional-documents', $additional_document);
                }
            }

            $additional_documents = AdditionalInformation::create([
                'user_id' => $user_id,
                'additional-information' => $request->input('additional-information'),
                'additional-document' => $additional_document_url,
            ]);

            return back()->with('message', 'Additional documents uploaded successfully');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
