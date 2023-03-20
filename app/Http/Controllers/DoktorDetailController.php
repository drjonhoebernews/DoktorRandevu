<?php

namespace App\Http\Controllers;

use App\Models\Doctorsdata;
use Illuminate\Http\Request;

class DoktorDetailController extends Controller
{
    public function show($id){
        $doktorbul = Doctorsdata::find($id);
        return view('doctordetail',compact('doktorbul'));
    }
}
