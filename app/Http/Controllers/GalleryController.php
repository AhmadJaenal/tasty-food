<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        return view("screens.landingPage.gallery");
    }
}