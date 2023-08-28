<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gajipegawaiController extends Controller
{
    public function Gajipegawai(){
        return view("showgajipegawai");
    }
    public function Gajipegawaiform(){
        return view("formgajipegawai");
    }
}
