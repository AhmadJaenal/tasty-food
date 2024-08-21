<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDashboardController extends Controller
{
    public function newsDashboard()
    {
        return view('dashboard.pages.news.news');
    }
}
