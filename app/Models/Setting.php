<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'show_analysis_section',
        'show_services_section',
        'show_about_us_section',
        'show_partner_section',
        'show_discuss_section',
        'show_contact_us_section',
        'show_teams_section'
    ];
}
