<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

      protected $fillable = [
        'id',
        'country_id',
        'title_ar',
        'created_at',
        'title_en',
        'updated_at',
    ];



}
