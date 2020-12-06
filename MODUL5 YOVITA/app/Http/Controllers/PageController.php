<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
 
    public function product()
    {
        return view('product');
    }
 
    public function order()
    {
        return view('order');
    }

    public function history()
    {
        return view('history');
    }
}
