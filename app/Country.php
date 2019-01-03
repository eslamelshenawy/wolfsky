<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

     protected $fillable = [
        'id',
        'code',
        'title_ar',
        'password',
        'title_en',
        'tel',
        'created_at',
        'updated_at',
    ];


      public function city()
    {

        return $this->hasMany('App\City', 'country_id')->orderby('id', 'asc');
    }

}
