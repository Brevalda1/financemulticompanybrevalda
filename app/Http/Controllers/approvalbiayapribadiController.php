<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\ApprovalBiayaPribadi;

class approvalbiayapribadiController extends Controller
{
    public function  Approvalbiayapribadiform(){
        return view("approvalbiayapribadi.showapprovalbiayapribadi");
    }
    public function Approvalbiayapribadiselect()
    {
        if(Session::Has('datas')){
            $param['datas'] = Session::get('datas');
        }
        else{
            $data = DB::select("select * from biaya_pribadi where cek_status_biaya_pribadi = 1 and 
            cek_approval_biaya_pribadi = 2 order by created_at desc");
            $param['datas'] = $data;
            // dd($param['datas']);
        }
        return view("approvalbiayapribadi.showapprovalbiayapribadi",$param);
    }
    public function Approvalbiayapribadiaccept($no)
{
    $gaji = new ApprovalBiayaPribadi();

    $gaji->acceptBiayaPribadi($no);
    return redirect('/approvalbiayapribadi');

    // if(session()->get("jenis")=="ADMIN"){
    //     return redirect('/admin/listbarang');
    // } else{
    //     return redirect('/owner/listbarang');
    // }
}
public function Approvalbiayapribadidecline($no)
{
    $gaji = new ApprovalBiayaPribadi();
    $gaji->declineBiayaPribadi($no);
    return redirect('/approvalbiayapribadi');

    // if(session()->get("jenis")=="ADMIN"){
    //     return redirect('/admin/listbarang');
    // } else{
    //     return redirect('/owner/listbarang');
    // }
}
}
