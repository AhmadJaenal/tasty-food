<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryDashboardController extends Controller
{
    public function galleryDashboard()
    {
        try {
            $images = Gallery::all();
            return view('dashboard.pages.gallery.gallery', compact('images'));
        } catch (\Throwable $th) {
            return view('dashboard.pages.gallery.gallery');
        }
    }

    public function deleteImage($id_image)
    {
        try {
            Gallery::find($id_image)->delete();
            return redirect()->route('galleryDashboard')->with('successDelete', 'Successfully deleted the image');
        } catch (\Throwable $th) {
            return redirect()->route('galleryDashboard')->with('failedDelete', 'Failed to delete image');
        }
    }

    public function addImage() 
    {
        return view('dashboard.pages.gallery.add_image');
    }
}
