<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.homepage');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }
}
