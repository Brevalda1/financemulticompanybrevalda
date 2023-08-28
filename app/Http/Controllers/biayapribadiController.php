<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biayapribadiController extends Controller
{
    public function Biayapribadi(){
        return view("showbiayapribadi");
    }
    public function Biayapribadiform(){
        return view("formbiayapribadi");
    }
}
