<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth',['except' => 'test']);
    }


    public function index(Request $request)
    {
        $value = $request->session()->get('accessToken');
        if($value != '' || null){
            return view('billing/billing');
        }
        else{
            return redirect('logout');
        }
    }
}
