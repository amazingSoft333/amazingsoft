<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_order_model;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
	  return view('backend.home.homeContent');
    }
	public function approved_index(Request $request,$id)
	{
		product_order_model::find($id)->update($request->all());
		return redirect()->back();
	}
    
	

    
}
