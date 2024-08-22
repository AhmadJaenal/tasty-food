<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();
        return view("landingPage.pages.news", compact('news'));
    }
}
