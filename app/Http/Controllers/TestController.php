<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //test pages
    public function index() {
        return view('test');
    }
}
