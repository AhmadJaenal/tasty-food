<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        try {
            $gallery = Gallery::all();
            return view("landingPage.pages.gallery", compact('gallery'));
        } catch (\Throwable $th) {
            return view("landingPage.pages.gallery");
        }
    }
}
