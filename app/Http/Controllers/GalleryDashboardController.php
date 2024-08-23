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
            return redirect()->route('galleryDashboard')->with('success', 'Successfully deleted the image');
        } catch (\Throwable $th) {
            return redirect()->route('galleryDashboard')->with('failed', 'Failed to delete image');
        }
    }

    public function addImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName  = time() . '.' . $request->image->extension();

        $request->image->move(public_path('img/gallery_food/'), $imageName);

        $imageUrl = url('img/gallery_food/' . $imageName);

        try {
            Gallery::create([
                'url_img' => $imageUrl,
                'created_at' => Now(),
                'updated_at' => Now(),
            ]);

            return back()
                ->with('success', 'Image uploaded successfully.');
        } catch (\Throwable $th) {
            return back()
                ->with('failed', 'Failed to upload image.');
        }
    }

    public function updateImage(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $food = Gallery::findOrFail($id);

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('img/gallery_food/'), $imageName);

                $imageUrl = url('img/gallery_food/' . $imageName);

                $food->url_img = $imageUrl;
            }

            $food->save();

            return back()->with('success', 'Image updated successfully.');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to update Image.');
        }
    }
}
