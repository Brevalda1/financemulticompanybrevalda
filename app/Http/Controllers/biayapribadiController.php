<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Biayapribadi;

class biayapribadiController extends Controller
{
    // public function Biayapribadi(){
    //     return view("biayapribadi.showbiayapribadi");
    // }
    public function Biayapribadiform(){
        return view("biayapribadi.formbiayapribadi");
    }
    public function Biayapribadiinsert(Request $req){

      
            $form_kode_biaya_pribadi = $req->form_kode_biaya_pribadi;
            $form_nama_biaya_pribadi =$req->form_nama_biaya_pribadi;
            $form_satuan_biaya_pribadi =$req->form_satuan_biaya_pribadi;
            $form_harga_biaya_pribadi =$req->form_harga_biaya_pribadi;
            $form_tanggal_biaya_pribadi =$req->form_tanggal_biaya_pribadi;
            $form_jumlah_biaya_pribadi =$req->form_jumlah_biaya_pribadi;
            $form_bukti_biaya_pribadi =$req->form_bukti_biaya_pribadi;

            $new = new Biayapribadi();
            $new->kode_biaya_pribadi = $form_kode_biaya_pribadi;
            $new->nama_biaya_pribadi = $form_nama_biaya_pribadi;
            $new->satuan_biaya_pribadi = $form_satuan_biaya_pribadi;
            $new->harga_biaya_pribadi = $form_harga_biaya_pribadi;
            $new->tanggal_biaya_pribadi=$form_tanggal_biaya_pribadi;
            $new->jumlah_biaya_pribadi=$form_jumlah_biaya_pribadi;
            $new->bukti_biaya_pribadi=$form_bukti_biaya_pribadi;
            $new->cek_status_biaya_pribadi=1;
      
            $new->save();
            return redirect("/biayapribadi");
          
        

    }

    public function Biayapribadiselect()
    {
        if(Session::Has('datas')){
            $param['datas'] = Session::get('datas');
        }
        else{
            $data = DB::select("select * from biaya_pribadi where cek_status_biaya_pribadi = 1 order by created_at desc");
            $param['datas'] = $data;
            // dd($param['datas']);
        }
        return view("biayapribadi.showbiayapribadi",$param);
    }
    public function Biayapribadiedit($no)
    {
        $new = new Biayapribadi();
        // $barang = new Barang();
        $arrBarang = $new->getBiayapribadiById($no);
        foreach ($arrBarang as $dt) {
            $data['kode_biaya_pribadi'] = $dt->kode_biaya_pribadi;
            $data['nama_biaya_pribadi'] = $dt->nama_biaya_pribadi;
            $data['satuan_biaya_pribadi'] = $dt->satuan_biaya_pribadi;
            $data['harga_biaya_pribadi'] = $dt->harga_biaya_pribadi;
            $data['tanggal_biaya_pribadi'] = $dt->tanggal_biaya_pribadi;
            $data['jumlah_biaya_pribadi'] = $dt->jumlah_biaya_pribadi;
            $data['bukti_biaya_pribadi'] = $dt->bukti_biaya_pribadi;
     
        }
        $data['kode_biaya_pribadi'] = $no;
        return view('biayapribadi.editbiayapribadi', $data);
  
    }

    public function Biayapribadiupdate(Request $req){



        $new = new Biayapribadi();
        $new->updateBiayaPribadi($req->form_kode_biaya_pribadi,
        $req->form_nama_biaya_pribadi,
        $req->form_satuan_biaya_pribadi,
        $req->form_harga_biaya_pribadi,
        $req->form_tanggal_biaya_pribadi,
        $req->form_jumlah_biaya_pribadi,
        $req->form_bukti_biaya_pribadi,
        );

    return redirect('/biayapribadi');
}

public function Biayapribadidelete($no)
    {
        $gaji= new Biayapribadi();
        $gaji->deleteBiayaPribadi($no);
        return redirect('/biayapribadi');

        // if(session()->get("jenis")=="ADMIN"){
        //     return redirect('/admin/listbarang');
        // } else{
        //     return redirect('/owner/listbarang');
        // }
    }
}
