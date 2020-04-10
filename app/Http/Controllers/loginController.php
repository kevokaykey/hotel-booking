<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use Session;

class loginController extends Controller
{
	//
	use AuthenticatesUsers;
	protected $username= 'username';
    protected $redirectTo = '/dashboard';
	protected $guard='web';


    public function getlogin(){
		
		if(Auth::guard('web')->check())
		{
			return redirect()->route('dashboard.index');
		}
		  return view('auth.login');
	}

	public function register(){
		
			  return view('auth.register');
	}

	public function postregister(Request $request){


		$this->validate($request,[
				
		    'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
			
		]);
		
		$User= new User;
        $User->hotelname =$request->hotelname;
		$User->fullname =$request->fullname;
		$User->email =$request->email;
		$User->password =bcrypt($request-> password);
		$User->save();

		Session::flash('message', 'Registered succesfully');
		Return back();
		
		

	}

	
	public function postlogin(Request $request)

	{
		$this->validate($request, [

			'email' => 'required',
			'password' => 'required',
		]);

	 if(Auth::guard('web')->attempt(['email'=>$request->email, 'password' =>$request->password ]))

	 {

		$user = User::where('email', $request->email)->first();
		
		if($user->is_hotelowner()){

		return redirect()->route('booking.index');
		}
		
		
		return redirect()->route('dashboard.index');
	}
		Session()->flash('Wrong', 'Wrong Email and Password Combination!');
		return redirect()->route('admin');
		
	}
	
	public function getLogout()
	{
		Auth::guard('web')->logout();
		return redirect()->route('admin');
		
	}
}
