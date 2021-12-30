<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function iletisim(){
        return view('yazokulu');
    }
    public function post(Request $req){
        return  $req-> post();
    }
}
