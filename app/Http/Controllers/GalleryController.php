<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Slider;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        try {
            $imageSlider = Slider::all();
            $gallery = Gallery::all();
            return view("landingPage.pages.gallery", compact('gallery', 'imageSlider'));
        } catch (\Throwable $th) {
            return view("landingPage.pages.gallery");
        }
    }
}
