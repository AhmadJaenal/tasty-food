<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryDashboardController extends Controller
{
    public function galleryDashboard()
    {
        return view('dashboard.pages.gallery.gallery');
    }
}
