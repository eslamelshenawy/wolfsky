<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airportbook extends Model
{
    //

	protected $table = 'airport_books';

       protected $fillable = [
        'leave_city',
        'arrive_city',
        'leave_date',
        'arrive_date',
        'status_trip',
        'hotel_air',
        'created_at',
        'updated_at',
        'user_id',
        'flight_status',
        'data_status',
    ];


}
