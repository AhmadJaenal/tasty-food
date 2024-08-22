<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage() 
    {

        $gallery = Gallery::all();
        return view('index', compact('gallery'));
    }
}
