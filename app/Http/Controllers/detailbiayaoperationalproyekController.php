<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\DetailBiayaOperationalProyek;

class detailbiayaoperationalproyekController extends Controller
{
    public function Detailbiayaoperationalproyekform(){
        return view("detailbiayaoperationalproyek.formbiayaoperationalproyek");
    }
    public function Detailbiayaoperationalproyekinsert(Request $req){

      
        $form_kode_biaya_detail_operational_proyek = $req->form_kode_biaya_detail_operational_proyek;
        $form_nama_biaya_detail_operational_proyek =$req->form_nama_biaya_detail_operational_proyek;
        $form_jumlah_detail_biaya_operational_proyek =$req->form_jumlah_detail_biaya_operational_proyek;
        $form_harga_detail_biaya_operational_proyek =$req->form_harga_detail_biaya_operational_proyek;
        $form_bukti_detail_biaya_operational_proyek =$req->form_bukti_detail_biaya_operational_proyek;
        $namagambar = $form_bukti_detail_biaya_operational_proyek->getClientOriginalName();


        $new = new DetailBiayaOperationalProyek();
        $new->kode_biaya_detail_operational_proyek = $form_kode_biaya_detail_operational_proyek;
        $new->nama_biaya_detail_biaya_operational_proyek	 = $form_nama_biaya_detail_operational_proyek;
        $new->jumlah_detail_biaya_operational_proyek=$form_jumlah_detail_biaya_operational_proyek;
        $new->harga_detail_biaya_operational_proyek = $form_harga_detail_biaya_operational_proyek;
        $new->bukti_detail_biaya_operational_proyek = $form_bukti_detail_biaya_operational_proyek;
        $new->bukti_detail_biaya_operational_proyek=$namagambar;
        $form_bukti_detail_biaya_operational_proyek->move("DetailBiayaOperationalProyek",$namagambar);

        $new->cek_status_detail_biaya_operational_proyek=1;
  
        $new->save();
        return redirect("/detailbiayaoperationalproyeka");
      
    

}

public function Detailbiayaoperationalproyekselect()
{
    if(Session::Has('datas')){
        $param['datas'] = Session::get('datas');
    }
    else{
        $data = DB::select("select * from detail_biaya_operational_proyek where cek_status_detail_biaya_operational_proyek = 1 order by created_at desc");
        $param['datas'] = $data;
        // dd($param['datas']);
    }
    return view("detailbiayaoperationalproyek.showbiayaoperationalproyek",$param);
}

public function Detailbiayaoperationalproyekedit($no)
{
    $new = new DetailBiayaOperationalProyek();
    // $barang = new Barang();
    $arrBarang = $new->getDetailbiayaoperationalproyekById($no);
    foreach ($arrBarang as $dt) {
        $data['kode_biaya_detail_operational_proyek'] = $dt->kode_biaya_detail_operational_proyek;
        $data['nama_biaya_detail_biaya_operational_proyek'] = $dt->nama_biaya_detail_biaya_operational_proyek	;
        $data['jumlah_detail_biaya_operational_proyek'] = $dt->jumlah_detail_biaya_operational_proyek;
        $data['harga_detail_biaya_operational_proyek'] = $dt->harga_detail_biaya_operational_proyek;
        $data['bukti_detail_biaya_operational_proyek'] = $dt->bukti_detail_biaya_operational_proyek;

    }
    $data['kode_biaya_detail_operational_proyek'] = $no;
    return view('detailbiayaoperationalproyek.editbiayaoperationalproyek', $data);

}

public function Detailbiayaoperationalproyekupdate(Request $req){


    $form_bukti_detail_biaya_operational_proyek =$req->form_bukti_detail_biaya_operational_proyek;
    $namagambar = $form_bukti_detail_biaya_operational_proyek->getClientOriginalName();

    $new = new DetailBiayaOperationalProyek();
    $new->updateDetailbiayaoperationalproyek($req->form_kode_biaya_detail_operational_proyek,
    $req->form_nama_biaya_detail_operational_proyek,
    $req->form_jumlah_detail_biaya_operational_proyek,
    $req->form_harga_detail_biaya_operational_proyek,
    $req->form_bukti_detail_biaya_operational_proyek,
    $namagambar


    );

return redirect('/detailbiayaoperationalproyeka');
}

public function Detailbiayaoperationalproyekdelete($no)
{
    $gaji= new DetailBiayaOperationalProyek();
    $gaji->deleteDetailbiayaoperationalproyek($no);
    return redirect('/detailbiayaoperationalproyeka');

    // if(session()->get("jenis")=="ADMIN"){
    //     return redirect('/admin/listbarang');
    // } else{
    //     return redirect('/owner/listbarang');
    // }
}
}
