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
        $services = \App\Models\Service::all(); // Fetch the first About Us section
        $contact = \App\Models\ContactInfo::first(); // Fetch the first About Us section
        $social_links = \App\Models\SocialLink::all();
        $settings = \App\Models\Setting::first();
        $team_members= \App\Models\TeamMember::all();

        return view('index' , compact('team_members','hero', 'locale','about','partners','successStories','services','contact','social_links','settings')); // Make sure home.blade.php exists in resources/views/
    }
}
