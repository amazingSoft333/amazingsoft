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
}
