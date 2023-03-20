<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoktorListesiController extends Controller
{
    public function index(){
        return view('docktorlist');
    }
}
