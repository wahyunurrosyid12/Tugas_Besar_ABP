<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard1()
    {
        return view('page1');
    }
    public function dashboard2()
    {
        return view('page2');
    }
}
