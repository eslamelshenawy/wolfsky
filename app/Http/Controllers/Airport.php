<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airportbook;
use App\User;
use App\Traveler;
use App\Hotel;
use App\Classroom;
use App\Flight;
class Airport extends Controller
{
    //

  public function dobook(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            'leave_city' => 'required',
            'arrive_city' => 'required',
            'leave_date' => 'required',
            // 'Adult' => 'required',
            // 'infant' => 'required',
            // 'type_grad' => 'required',
            // 'flexible' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {

         $flight = new Flight();
	   if($request->flight1 === 'checked'){
      
	   $flight->flight1='checked';
	   $flight->flight2=$request->flight2;
	   $flight->flight3=$request->flight3;
	   $flight->save();
	   }elseif ($request->flight2 === 'checked') {
	   $flight->flight1=$request->flight1;
	   $flight->flight2='checked';
	   $flight->flight3=$request->flight3;
	   $flight->save();
	   }
	   else{
	   $flight->flight1=$request->flight1;
	   $flight->flight2=$request->flight2;
	   $flight->flight3='checked';
	   $flight->save();
	   }
	   


	   $airport=new Airportbook();
	   $airport->leave_city=$request->leave_city;
	   $airport->arrive_city=$request->arrive_city;
	   $airport->leave_date=$request->leave_date;
	   if($request->arrive_date){
	   $airport->arrive_date=$request->arrive_date;
	   }
	   $airport->status_trip=$request->nonstop;
	   $airport->data_status=$request->flexible;
	   $airport->num_trip='1';
	   $airport->user_id=\Auth::user()->id;
	   $airport->type_flight=$flight->id;
	         $airport->save();


      $Traveler=new Traveler();
	    if ($request->Adult) {
	   $Traveler->Adult_age=$request->Adult;	    	
	    }
	    if ($request->child) {
	   $Traveler->child_age=$request->child;
	    }
	    if ($request->infant) {
	   $Traveler->infant_age=$request->infant;
	    }
	   $Traveler->type_grad=$request->type_grad;
	   $Traveler->user_id=\Auth::user()->id;
	   $Traveler->number_air=$airport->id;
	   $Traveler->save();


  	   if($request->leave_city2){
	   $airport2=new Airportbook();
          $airport2->leave_city=$request->leave_city2;
	      $airport2->arrive_city=$request->arrive_city2;
	      $airport2->leave_date=$request->leave_date2;
	      $airport2->arrive_date=$request->arrive_date2;
	      $airport2->num_trip='2';
	   $airport2->status_trip=$request->nonstop;
	   $airport2->data_status=$request->flexible;
	   $airport2->user_id=\Auth::user()->id;
	   $airport2->type_flight=$flight->id;
	         $airport2->save();

         }


  	   if($request->leave_city3){
	     $airport3=new Airportbook();
          $airport3->leave_city=$request->leave_city3;
	      $airport3->arrive_city=$request->arrive_city3;
	      $airport3->leave_date=$request->leave_date3;
	      $airport3->arrive_date=$request->arrive_date3;
	      $airport3->num_trip='3';

	   $airport3->status_trip=$request->nonstop;
	   $airport3->data_status=$request->flexible;
	   $airport3->user_id=\Auth::user()->id;
	   $airport3->type_flight=$flight->id;
	         $airport3->save();
         }

	     return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  } 

      public function dobook_h(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            'leave_city_h' => 'required',
            'arrive_city_h' => 'required',
            // 'Adult' => 'required',
            // 'infant' => 'required',
            // 'type_grad' => 'required',
            // 'flexible' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {

	   $airport=new Airportbook();
	   $airport->leave_city=$request->leave_city_h;
	   $airport->arrive_city=$request->arrive_city_h;
	   $airport->leave_date=$request->leave_date_h;
	   // $airport->hotel_air='1';

	   if($request->arrive_date_h){
	   $airport->arrive_date=$request->arrive_date_h;
	   }
	   $airport->user_id=\Auth::user()->id;

	   $flight = new Flight();
	   if($request->hotel1 == 'checked'){
      
	   $flight->flight1='checked';
	   $flight->flight2=$request->hotel2;
	   $flight->save();

	   }else {

	   $flight->flight1=$request->hotel1 ;
	   $flight->flight2='checked';
	   $flight->save();
	   }
	   
   	   $airport->type_flight=$flight->id;
       $airport->save();

	    $Traveler=new Traveler();
	    if ($request->Adult_ar) {
	   $Traveler->Adult_age=$request->Adult_ar;	    	
	    }
	    if ($request->child_ar) {
	   $Traveler->child_age=$request->child_ar;
	    }
	    if ($request->infant_ar) {
	   $Traveler->infant_age=$request->infant_ar;
	    }
	   $Traveler->type_grad=$request->type_grad_ar;
	   $Traveler->user_id=\Auth::user()->id;
	   $Traveler->number_air=$airport->id;
	   $Traveler->save();



	     return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  } 

   public function dobook_hotel(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            'way_name' => 'required',
            'entry_date' => 'required',
            'leave_dat' => 'required',
            'night_numb' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {

	      $flight = new Flight();
	   if($request->hotel1 == 'checked'){
      
	   $flight->flight1='checked';
	   $flight->flight2=$request->hotel2;
	   $flight->save();

	   }else {

	   $flight->flight1=$request->hotel1 ;
	   $flight->flight2='checked';
	   $flight->save();
	   }
	   
	   $hotel=new Hotel();
	   $hotel->way_name=$request->way_name;
	   $hotel->entry_date=$request->entry_date;
	   $hotel->leave_date=$request->leave_dat;
	   $hotel->night_numb=$request->night_numb;
	   $hotel->user_id=\Auth::user()->id;

	   $hotel->type_flight=$flight->id;
       $hotel->save();



		 $Class=new Classroom();
	       $Class->num_class=$request->num_class4;

	       if ($request->Adult_class4 && $request->Adult_class3 ) {
		   $Class->Adult=$request->Adult_class4 + $request->Adult_class3 ;
		   }elseif ($request->Adult_class4) {
		   	$Class->Adult=$request->Adult_class4;
		   }else{
		   $Class->Adult=$request->Adult_class3 ;
		   }

		  if ($request->child_class4 && $request->child_class3) {
		   $Class->child=$request->child_class4 +$request->child_class3;
           }elseif ($request->child_class4) {
           	$Class->child=$request->child_class4;
           }else{
		   $Class->child=$request->child_class3;

           }

		   $Class->hotel_id=$hotel->id;
		   $Class->user_id=\Auth::user()->id;

		   $Class->save();
            
            


	

	     return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  } 

    public function dobook_hot(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            'way_name' => 'required',
            'entry_date' => 'required',
            'leave_dat' => 'required',
            'night_numb' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {

	      $flight = new Flight();
	   if($request->hotel1 == 'checked'){
      
	   $flight->flight1='checked';
	   $flight->flight2=$request->hotel2;
	   $flight->save();

	   }else {

	   $flight->flight1=$request->hotel1 ;
	   $flight->flight2='checked';
	   $flight->save();
	   }
	   
	   $hotel=new Hotel();
	   $hotel->way_name=$request->way_name;
	   $hotel->entry_date=$request->entry_date;
	   $hotel->leave_date=$request->leave_dat;
	   $hotel->night_numb=$request->night_numb;
	   $hotel->user_id=\Auth::user()->id;

	   $hotel->type_flight=$flight->id;
       $hotel->save();



		 $Class=new Classroom();
	       $Class->num_class=$request->num_class;

	       if ($request->Adult_class && $request->Adult_class2 ) {
		   $Class->Adult=$request->Adult_class + $request->Adult_class2 ;
		   }elseif ($request->Adult_class) {
		   	$Class->Adult=$request->Adult_class;
		   }else{
		   $Class->Adult=$request->Adult_class2 ;
		   }

		  if ($request->child_class && $request->child_class2) {
		   $Class->child=$request->child_class +$request->child_class2;
           }elseif ($request->child_class) {
           	$Class->child=$request->child_class;
           }else{
		   $Class->child=$request->child_class2;

           }

		   $Class->hotel_id=$hotel->id;
		   $Class->user_id=\Auth::user()->id;

		   $Class->save();
            
            


	

	     return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  } 

     public function add_travel(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            'type_grad' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {

	   if ($request->Adult == 0 && $request->child == 0 && $request->infant == 0) {

	     	  return response()->json(['status'=>'error2','errors'=>'ادخل البيانات صحيحه ']);

	     }

	     else{
	   $Traveler=new Traveler();
	   $Traveler->Adult_age=$request->Adult;
	   $Traveler->child_age=$request->child;
	   $Traveler->infant_age=$request->infant;
	   $Traveler->type_grad=$request->type_grad;
	   $Traveler->user_id=\Auth::user()->id;
	   $Traveler->save();
	     return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);

	     }


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  }  


       public function add_class(Request $request)
  {
          $validator = \Validator::make($request->all(), [
            // 'Adult_class' => 'required',
            // 'child_class' => 'required',
            // 'infant' => 'required',
            'num_class' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error1','errors'=>$validator->errors()->all()]);
        }
	
	else{

        if (\Auth::user()) {



		   if ($request->Adult_class) {
		   $Class=new Classroom();
		   $Class->num_class=$request->num_class;
		   $Class->Adult=$request->Adult_class;
		   $Class->child=$request->child_class;
		   $Class->user_id=\Auth::user()->id;
		   $Class->save();


		  if ($request->Adult_class2) {

		   $Class2=new Classroom();
		   $Class2->num_class=$request->num_class;
		   $Class2->Adult=$request->Adult_class2;
		   $Class2->child=$request->child_class2;
		   $Class2->user_id=\Auth::user()->id;
		   $Class2->save();

	       return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);

		    }

		   		       return response()->json(['status'=>'success','success'=>'تم الحجز بالنجاح ']);

		   	
		   }
		   else{
		   		     return response()->json(['status'=>'error2','errors'=>'يجب ادخال البيانات صحيحه ']);


		   }



		  


	  


             }else{

            return response()->json(['status'=>'error2','errors'=>'يجب عليك تسجيل الدخول ']);


             }

	    	
	    }

  }




}
