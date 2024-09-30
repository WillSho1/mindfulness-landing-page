<?php

namespace App\Http\Controllers;

use App\Models\Feature;

class PageNavigationController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        // dd($features);
        return view('index', compact('features'));
    }
}
