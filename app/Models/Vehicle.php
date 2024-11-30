<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'vehicle_type',
        'body_type',
        'year_of_manufacture',
        'color'
    ];
}
