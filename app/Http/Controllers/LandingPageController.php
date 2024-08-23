<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage() 
    {

        $gallery = Gallery::all();
        $news = News::all();
        return view('index', compact('gallery', 'news'));
    }
}
