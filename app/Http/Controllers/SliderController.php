<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        $imageSlider = Slider::all();
        return view('dashboard.pages.slider.slider', compact('imageSlider'));
    }

    public function deleteImageSlider($id_image)
    {
        try {
            Slider::find($id_image)->delete();
            return back()->with('success', 'Successfully deleted the image');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to delete image');
        }
    }

    public function addImageSlider(Request $request)
    {
        try {

            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);

            $imageName  = time() . '.' . $request->image->extension();

            $request->image->move(public_path('img/slider_img/'), $imageName);

            $imageUrl = url('img/slider_img/' . $imageName);

            Slider::create([
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

    public function updateImageSlider(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);

            $food = Slider::findOrFail($id);

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('img/slider_img/'), $imageName);

                $imageUrl = url('img/slider_img/' . $imageName);

                $food->url_img = $imageUrl;
            }

            $food->updated_at = Now();
            $food->save();

            return back()->with('success', 'Image updated successfully.');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to update Image.');
        }
    }
}
