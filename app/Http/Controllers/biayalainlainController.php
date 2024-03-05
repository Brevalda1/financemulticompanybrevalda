<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\BiayaLainLain;


class biayalainlainController extends Controller
{
    public function Biayalainlain(){
        return view("biayalainlain.showbiayalainlain");
    }
    public function Biayalainlainform(){
        return view("biayalainlain.formbiayalainlain");
    }
    public function Biayalainlaininsert(Request $req){

      
        $form_kode_biaya_lainlain = $req->form_kode_biaya_lainlain;
        $form_nama_biaya_lainlain =$req->form_nama_biaya_lainlain;
        $form_satuan_biaya_lainlain =$req->form_satuan_biaya_lainlain;
        $form_harga_biaya_lainlain =$req->form_harga_biaya_lainlain;
        $form_tanggal_biaya_lainlain =$req->form_tanggal_biaya_lainlain;
        $form_jumlah_biaya_lainlain =$req->form_jumlah_biaya_lainlain;
        $form_bukti_biaya_lainlain =$req->form_bukti_biaya_lainlain;

        $new = new BiayaLainLain();
        $new->kode_biaya_lainlain = $form_kode_biaya_lainlain;
        $new->nama_biaya_lainlain = $form_nama_biaya_lainlain;
        $new->satuan_biaya_lainlain = $form_satuan_biaya_lainlain;
        $new->harga_biaya_lainlain = $form_harga_biaya_lainlain;
        $new->tanggal_biaya_lainlain=$form_tanggal_biaya_lainlain;
        $new->jumlah_biaya_lainlain=$form_jumlah_biaya_lainlain;
        $new->bukti_biaya_lainlain=$form_bukti_biaya_lainlain;
        $new->cek_status_biaya_lainlain=1;
  
        $new->save();
        return redirect("/biayalainlain");
      
    

}

public function Biayalainlainselect()
{
    if(Session::Has('datas')){
        $param['datas'] = Session::get('datas');
    }
    else{
        $data = DB::select("select * from biaya_lainlain where cek_status_biaya_lainlain = 1 order by created_at desc");
        $param['datas'] = $data;
        // dd($param['datas']);
    }
    return view("biayalainlain.showbiayalainlain",$param);
}
public function Biayalainlainedit($no)
{
    $new = new BiayaLainLain();
    // $barang = new Barang();
    $arrBarang = $new->getBiayaLainLainById($no);
    foreach ($arrBarang as $dt) {
        $data['kode_biaya_lainlain'] = $dt->kode_biaya_lainlain;
        $data['nama_biaya_lainlain'] = $dt->nama_biaya_lainlain;
        $data['satuan_biaya_lainlain'] = $dt->satuan_biaya_lainlain;
        $data['harga_biaya_lainlain'] = $dt->harga_biaya_lainlain;
        $data['tanggal_biaya_lainlain'] = $dt->tanggal_biaya_lainlain;
        $data['jumlah_biaya_lainlain'] = $dt->jumlah_biaya_lainlain;
        $data['bukti_biaya_lainlain'] = $dt->bukti_biaya_lainlain;
 
    }
    $data['kode_biaya_lainlain'] = $no;
    return view('biayalainlain.editbiayalainlain', $data);

}

public function Biayalainlainupdate(Request $req){



    $new = new BiayaLainLain();
    $new->updateBiayaLainLain($req->form_kode_biaya_lainlain,
    $req->form_nama_biaya_lainlain,
    $req->form_satuan_biaya_lainlain,
    $req->form_harga_biaya_lainlain,
    $req->form_tanggal_biaya_lainlain,
    $req->form_jumlah_biaya_lainlain,
    $req->form_bukti_biaya_lainlain,
    );

return redirect('/biayalainlain');
}

public function Biayalainlaindelete($no)
{
    $gaji= new BiayaLainLain();
    $gaji->deleteBiayaLainLain($no);
    return redirect('/biayalainlain');

    // if(session()->get("jenis")=="ADMIN"){
    //     return redirect('/admin/listbarang');
    // } else{
    //     return redirect('/owner/listbarang');
    // }
}
    

}
