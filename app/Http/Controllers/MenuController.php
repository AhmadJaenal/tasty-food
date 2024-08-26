<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function food()
    {
        $foods = Food::all();
        return view('dashboard.pages.menu.menu', compact('foods'));
    }

    public function addMenu(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'food_name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $imageName  = time() . '.' . $request->image->extension();

        $request->image->move(public_path('img/menu/'), $imageName);

        $imageUrl = url('img/menu/' . $imageName);

        try {
            Food::create([
                'url_img' => $imageUrl,
                'food_name' => $request->food_name,
                'desc' => $request->desc,
                'created_at' => Now(),
                'updated_at' => Now(),
            ]);

            return back()
                ->with('success', 'Menu uploaded successfully.');
        } catch (\Throwable $th) {
            return back()
                ->with('failed', 'Failed to upload Menu.');
        }
    }

    public function deleteMenu($id_menu)
    {
        try {
            Food::find($id_menu)->delete();
            return back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function updateMenu(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'food_name' => 'required|string|max:500',
                'desc' => 'required|string',
            ]);

            $news = Food::findOrFail($id);

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('img/menu/'), $imageName);

                $imageUrl = url('img/menu/' . $imageName);

                $news->url_img = $imageUrl;
            }
            
            $news->food_name = $request->food_name;
            $news->desc = $request->desc;
            $news->updated_at = Now();

            $news->save();

            return back()->with('success', 'Menu updated successfully.');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to update Menu.');
        }
    }
}
