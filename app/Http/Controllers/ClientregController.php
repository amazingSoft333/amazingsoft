<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\product_order_model;
use Auth;
use Hash;

class ClientregController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('clientField.home.homeClient');
    }
	public function product_index()
	{
		return view('clientField.home.product');
	}
	public function notification_index()
	{
		return view('clientField.home.notification');
	}

    public function clientDetails()
    {
        $x = User::find(Auth::user()->id);
        return view('clientField.clientDetail.clientDetail',['x'=>$x]);
    }
	
	public function setting_index()
	{
		return view('clientField.home.setting');
	}
	
	public function clientPayment()
	{
		return view('clientField.clientDetail.clientPayemntHistory');
	}
	public function current_index(Request $request)
	{
		//dd($request);
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {   return redirect()->back()->with("error","Your current password does not matches. ");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){  return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->back()->with("message","Password changed successfully !");

    }

    public function clientUpdate(Request $request,$id)
    {
      
		User::find($id)->update($request->all());
		return redirect()->back()->with("message","Information changed successfully !");
    }
}
