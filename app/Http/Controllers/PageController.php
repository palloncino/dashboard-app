<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method to show the dashboard
    public function dashboard()
    {
        return view('dashboard.index');
    }

    // Method to show user management
    public function users()
    {
        return view('dashboard.users');
    }

    // Method to show devices
    public function devices()
    {
        return view('dashboard.devices');
    }
}
