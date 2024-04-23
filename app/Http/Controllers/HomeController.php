<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Gallary;
use App\Models\Service;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $sliders = Sliders::all();
        $about = Abouts::limit(1)->first();
        $gallaries = Gallary::all();
        $services = Service::where('type','!=','main')->get();
        $service = Service::where('type','main')->first();
        return view('home',compact('sliders','about','gallaries','services','service'));
    }


    public function contactus()
    {
        return view('contacts',compact('contact'));
    }



}
