<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biayaoperationalproyekController extends Controller
{
    public function Biayaoperationalproyek(){
        return view("showbiayaoperationalproyek");
    }
    public function Biayaoperationalproyekform(){
        return view("formbiayaoperationalproyek");
    }
}
