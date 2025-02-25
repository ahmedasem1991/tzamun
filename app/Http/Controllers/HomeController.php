<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = \App\Models\Hero::first(); // Fetch the first Hero section
        $about = \App\Models\AboutUs::first(); // Fetch the first About Us section
        $locale = app()->getLocale(); // Get the current language (en or ar)
        $partners = \App\Models\Partner::all(); // Fetch the first About Us section
        $successStories = \App\Models\SuccessStory::all(); // Fetch the first About Us section

        return view('home' , compact('hero', 'locale','about','partners','successStories')); // Make sure home.blade.php exists in resources/views/
    }
}
