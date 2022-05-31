<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $foods=Food::all();
        return view('Front.index',compact('foods'));

    }
}
