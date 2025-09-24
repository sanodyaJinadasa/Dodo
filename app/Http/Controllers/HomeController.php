<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function macro()
    {
        return view('photographer');
    }

    // Outreach & Talks page
    public function outreach()
    {
        return view('outreach');
    }

    // Publications page
    public function publications()
    {
        return view('publications');
    }

    // CV / Downloads page
    public function cv()
    {
        return view('cv');
    }

    // Teaching page
    public function teaching()
    {
        return view('teaching');
    }

    // Blog page
    public function blog()
    {
        return view('blog');
    }
}
