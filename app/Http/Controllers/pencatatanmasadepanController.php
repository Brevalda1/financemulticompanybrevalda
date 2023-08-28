<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pencatatanmasadepanController extends Controller
{
    public function Pencatatanmasadepan(){
        return view("showpencatatanmasadepan");
    }
    public function Pencatatanmasadepanform(){
        return view("formpencatatanmasadepan");
    }
}
