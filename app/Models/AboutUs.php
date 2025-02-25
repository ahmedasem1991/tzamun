<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_en',
        'header_ar',
        'vision_en',
        'vision_ar',
        'vision_description_en',
        'vision_description_ar',
        'mission_en',
        'mission_ar',
        'mission_description_en',
        'mission_description_ar',
        'logo',
    ];
}
