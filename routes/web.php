<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\CustomTripController;
use App\Http\Controllers\SettingsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();



Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/about', [UserController::class, 'create_about_user'])->name('about');
        Route::post('/save-about', [UserController::class, 'store_about'])->name('save-about');
        Route::get('/catering', [UserController::class, 'about_user_catering'])->name('catering');
        Route::post('/save-catering-preference', [UserController::class, 'store_catering_preference'])->name('save-catering-preference');
        Route::get('/health', [UserController::class, 'about_user_health'])->name('health');
        Route::post('/save-health', [UserController::class, 'store_health'])->name('save-health');
        Route::get('/next-of-kin', [UserController::class, 'about_user_next_of_kin'])->name('next-of-kin');
        Route::post('/save-next-of-kin', [UserController::class, 'store_next_of_kin'])->name('save-next-of-kin');
        Route::get('/members', [UserController::class, 'members'])->name('members');
        Route::post('/save-member', [UserController::class, 'store_member'])->name('save-member');
        Route::get('/add-travel-documents', [UserController::class, 'create_travel_documents'])->name('add-travel-documents');
        Route::post('/save-documents', [UserController::class, 'store_documents'])->name('save-documents');
        Route::get('/additional-documents', [UserController::class, 'add_additional_documents'])->name('additional-documents');
        Route::post('/save-additional-documents', [UserController::class, 'store_additional_documents'])->name('save-additional-documents');
        Route::get('/travel-documents', [UserController::class, 'travel_documents'])->name('travel-documents');
        Route::get('/invoices', [UserController::class, 'invoices'])->name('invoices');
    });

    Route::group(['prefix' => 'overview', 'as' => 'overview.'], function () {
        Route::get('/current-safaris', [OverviewController::class, 'current_safaris'])->name('current-safaris');
        Route::get('/itinerary', [OverviewController::class, 'itinerary'])->name('itinerary');
        Route::get('/previous-safaris', [OverviewController::class, 'previous_safaris'])->name('previous-safaris');
        Route::get('/previous-itinerary', [OverviewController::class, 'previous_itinerary'])->name('previous-itinerary');
        Route::get('/account', [OverviewController::class, 'account'])->name('account');
    });
    
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/custom-settings', [SettingsController::class, 'custom_settings'])->name('custom-settings');
        Route::get('/members', [SettingsController::class, 'members'])->name('members');
        Route::get('/password', [SettingsController::class, 'password'])->name('password');
    });
});

Route::get('/contact-information', [HomeController::class, 'contact_information'])->name('contact-information');

Route::group(['prefix' => 'custom-trip', 'as' => 'custom-trip.'], function () {
    Route::get('/home', [CustomTripController::class, 'index'])->name('home');
    Route::get('/design', [CustomTripController::class, 'design_trip'])->name('design');
    Route::post('/design-about-user', [CustomTripController::class, 'store_design'])->name('design-about-user');
});
