<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en', 
        'title_ar', 
        'description_en', 
        'description_ar', 
        'background_image'
    ];


}
