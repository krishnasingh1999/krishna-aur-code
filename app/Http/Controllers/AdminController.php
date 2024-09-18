<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view("master-admin");
    }
   
    public function center()
    {
        return view("center");
    }
    
    public function addCenter()
    {
        return view("add-center");
    }

    public function centerDetails()
    {
        return view("center-details");
    }

    public function enrolStudent()
    
    {
        return view("/center-panel/enrol-student");
    }

    public function centerLogin()
    
    {
        return view("/center-panel/login");
    }
    public function centerDashboard()
    
    {
        return view("/center-panel/centerDashboard");
    }
}
