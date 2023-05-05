<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function custom_settings()
    {
        return view('user.settings.custom-settings');
    }

    public function members()
    {
        return view('user.settings.members');
    }

    public function password()
    {
        return view('user.settings.password');
    }
}
