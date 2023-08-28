<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biayaoperationalnonbudgetingController extends Controller
{
    public function Biayaoperationalnonbudgeting(){
        return view("showbiayaoperationalnonbudgeting");
    }
    public function Biayaoperationalnonbudgetingform(){
        return view("formbiayaoperationalnonbudgeting");
    }
}
