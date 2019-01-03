<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['status' => 1]);
    }


    public function doLogin(Request $request)
        { 
            
             $userdata = array(
                    'email' => $request->email,
                    'password' =>$request->password
                );
 
                if (\Auth::attempt($userdata))
                    { 

                 return response()->json(['status'=>'success','msg'=>'success login']);
                   
                    }
                  else
                    {
                 return response()->json(['status'=>'error','msg'=>'These credentials do not match our records.']);
                    }
                
           }

          public function doreg(Request $request)
        {  

           $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'newemail' => 'required|email|unique:users,email',
            'newpwd' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>'error','errors'=>$validator->errors()->all()]);
        }
  
  else{
          
           $user=new \App\User;
           $user->email = $request->newemail;
           $user->password = bcrypt($request->newpwd);
           $user->name = $request->name;
           $user->save();

                 return response()->json(['status'=>'success','msg'=>'success credentials']);

       }


       }



}


