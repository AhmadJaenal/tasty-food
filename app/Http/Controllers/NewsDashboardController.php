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
            return redirect()->route('newsDashboard')->with('successDelete', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('newsDashboard')->with('failedDelete', 'Data Gagal Dihapus');
        }
    }
}
