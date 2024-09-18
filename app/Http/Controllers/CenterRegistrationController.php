<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterRegistrationController extends Controller
{
    public function index(){
        return view('add-center');
    }
    public function Addcenter(Request $request)
    {
        echo"<pre>";
      print_r($request->all());
    }
}
