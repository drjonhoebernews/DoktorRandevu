<?php

namespace App\Http\Controllers;

use App\Models\Doctorsdata;
use Illuminate\Http\Request;

class DoktorListesiController extends Controller
{
    public function index(){
        $doktorlist = Doctorsdata::paginate(10);
        $data = [
            'liste' => $doktorlist
        ];
        return view('docktorlist',$data);
    }
}
