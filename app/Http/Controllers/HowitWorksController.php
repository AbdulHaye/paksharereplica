<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowitWorksController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth',['except' => 'test']);
    }


    public function index()
    {

            return view('how-it-works');

    }

}
