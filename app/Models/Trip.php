<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trips';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'passenger_id',
        'driver_id',
        'vehicle_id',
        'from_lat',
        'from_lng',
        'to_lat',
        'to_lng',
        'from_location',
        'to_location',
        'trip_status',
        'trip_fare',
        'trip_duration',
        'trip_distance',
        'start_time',
        'end_time',
        'cancel_reason',
        'feedback',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'from_lat' => 'float',
        'from_lng' => 'float',
        'to_lat' => 'float',
        'to_lng' => 'float',
        'trip_fare' => 'float',
        'trip_distance' => 'float',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    /**
     * Relationships
     */

    // // Relationship with Passenger
    // public function passenger()
    // {
    //     return $this->belongsTo(Passenger::class);
    // }

    // // Relationship with Driver
    // public function driver()
    // {
    //     return $this->belongsTo(Driver::class);
    // }

    // // Relationship with Vehicle
    // public function vehicle()
    // {
    //     return $this->belongsTo(Vehicle::class);
    // }
}
