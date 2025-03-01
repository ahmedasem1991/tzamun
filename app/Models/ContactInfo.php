<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'location_en',
        'location_ar',
        'phone_1',
        'phone_2',
    ];
}
