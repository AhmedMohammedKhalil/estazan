<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Gallary;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $sliders = Sliders::all();
        $about = Abouts::limit(1)->first();
        $galleries = Gallary::all();
        return view('home',compact('sliders','about','galleries'));
    }


    public function aboutus()
    {
        $about = Abouts::limit(1)->first();
        return view('abouts',compact('about'));
    }


    public function contactus()
    {
        return view('contacts',compact('contact'));
    }



}
