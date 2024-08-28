<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsDashboardController extends Controller
{
    public function newsDashboard()
    {
        $news = News::all();
        return view('dashboard.pages.news.news', compact('news'));
    }

    public function deleteNews($id_news)
    {
        try {
            News::find($id_news)->delete();
            return  back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return  back()->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function addNews(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            $imageName  = time() . '.' . $request->image->extension();

            $request->image->move(public_path('img/news/'), $imageName);

            $imageUrl = url('img/news/' . $imageName);
            News::create([
                'url_img' => $imageUrl,
                'title' => $request->title,
                'content' => $request->content,
                'created_at' => Now(),
                'updated_at' => Now(),
            ]);

            return back()
                ->with('success', 'News uploaded successfully.');
        } catch (\Throwable $th) {
            return back()
                ->with('failed', 'Failed to upload News.');
        }
    }

    public function updateNews(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'title' => 'required|string|max:500',
                'content' => 'required|string',
            ]);

            $news = News::findOrFail($id);

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('img/news/'), $imageName);

                $imageUrl = url('img/news/' . $imageName);

                $news->url_img = $imageUrl;
            }

            $news->title = $request->title;
            $news->content = $request->content;
            $news->updated_at = Now();

            $news->save();

            return back()->with('success', 'News updated successfully.');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Failed to update News.');
        }
    }
}
