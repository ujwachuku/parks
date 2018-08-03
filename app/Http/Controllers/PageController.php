<?php

namespace App\Http\Controllers;

use App\Ride;
use App\Package;
use App\Slider;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function groups()
    {
        return view('pages.groups');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
}
