<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //


         protected $fillable = [
        'iata',
        'lon',
        'iso',
        'status',
        'name',
        'continent',
        'type',
        'lat',
        'size',
    ];


}
