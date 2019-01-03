<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //

	protected $table = 'type_flights';

          protected $fillable = [
        'id',
        'country_id',
        'flight3',
        'flight2',
        'created_at',
        'updated_at',
    ];

}
