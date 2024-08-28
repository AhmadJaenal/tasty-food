<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage() 
    {

        $gallery = Gallery::take(6)->get();
        $listNews = News::skip(1)->take(4)->get();
        $news = News::first();
        return view('index', compact('gallery', 'news', 'listNews'));
    }
}
