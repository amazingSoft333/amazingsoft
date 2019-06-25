<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdermanagerController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
	
	public function manageOrderList()
	{
		return view('backend.ordermanage.orderList');
	}
}
