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
        $listNews = News::all();
        $news = News::first();
        return view('index', compact('gallery', 'news', 'listNews'));
    }
}
