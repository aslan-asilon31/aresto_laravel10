<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'cust_name',
        'contact',
        'reservation_date',
        'number_guest',
        'slug',
    ];
}
