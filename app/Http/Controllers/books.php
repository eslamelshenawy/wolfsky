<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class books extends Controller
{
    //

    public function books()
   {
             $airport_books=\App\Airportbook::where('user_id',\Auth::user()->id)->orderby('id','asc')->paginate(10);
             $hote_book=\App\Hotel::where('user_id',\Auth::user()->id)->orderby('id','asc')->paginate(10);
             $social=\App\Setting::get();
             $about =\App\Topic::where('webmaster_id',15)->get();

             return view('frontEnd.books',compact('hote_book','airport_books','social','about'));
   
   }

      public function about()
   {
                 $social=\App\Setting::get();
             $about =\App\Topic::where('webmaster_id',15)->get();
             return view('frontEnd.about',compact('about','social'));

   }


}
