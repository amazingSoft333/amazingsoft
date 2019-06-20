<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

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

    public function clientDetails()
    {
        $x = User::find(Auth::user()->id);
        return view('clientField.clientDetail.clientDetail',['x'=>$x]);
    }

    public function clientUpdate(Request $request)
    {
        //$cate=Categoryteam::find($request->id);
        $client = User::find(Auth::user()->id);
        $client->name =$request->name;
        $client->email=$request->email;
        $client->save();
    }
}
