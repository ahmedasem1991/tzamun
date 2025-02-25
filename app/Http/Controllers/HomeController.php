<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = \App\Models\Hero::first(); // Fetch the first Hero section
        $locale = app()->getLocale(); // Get the current language (en or ar)
        return view('home' , compact('hero', 'locale')); // Make sure home.blade.php exists in resources/views/
    }
}
