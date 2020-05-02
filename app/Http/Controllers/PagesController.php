<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function diningmethod()
    {
        return view('order.diningmethod');
    }
    /*public function test()
    {
        return view('order.test');
    }*/
    
}
    