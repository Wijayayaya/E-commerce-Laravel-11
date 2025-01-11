<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $homepagesetting = Setting::first();
        return view('home.index', compact('homepagesetting'));
    }

    public function category()
    {
        return view('home.category');
    }

    public function product()
    {
        return view('home.product');
    }
}
