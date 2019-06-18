<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
