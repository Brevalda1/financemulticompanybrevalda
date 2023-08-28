<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pencatatanrekeningController extends Controller
{
    public function Pencatatanrekening(){
        return view("showpencatatanrekening");
    }
    public function Pencatatanrekeningform(){
        return view("formpencatatanrekening");
    }
}
