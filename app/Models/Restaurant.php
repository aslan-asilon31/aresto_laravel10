<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'contact_number',
        'website',
        'opening_hours',
        'rating',
        'description',
        'slug',
    ];
    
}
