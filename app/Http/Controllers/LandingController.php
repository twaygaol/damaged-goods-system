<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class LandingController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('home', compact('artikels'));
    }
}
