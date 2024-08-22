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
}
