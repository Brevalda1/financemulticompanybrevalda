<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\GajiPegawai;


class gajipegawaiController extends Controller
{
    // public function Gajipegawai(){
    //     return view("showgajipegawai");
    // }
    public function Gajipegawaiform(){
        return view("formgajipegawai");
    }
    public function Gajipegawaiinsert(Request $req){
        //echo($req->Fname);
            $kop='sss';
            $vop=2131;
            $form_id_pegawai_gaji = $req->form_id_pegawai_gaji;
            $form_nomor_ktp_pegawai_gaji =$req->form_nomor_ktp_pegawai_gaji;
            $form_nama_pegawai_gaji =$req->form_nama_pegawai_gaji;
            $form_jumlah_kehadiran_pegawai_gaji =$req->form_jumlah_kehadiran_pegawai_gaji;
            $form_rate_pegawai_gaji =$req->form_rate_pegawai_gaji;
            $form_tambahan_lainlain_pegawai_gaji =$req->form_tambahan_lainlain_pegawai_gaji;
            $form_keterangan_pegawai_gaji =$req->form_keterangan_pegawai_gaji;
            $form_total_pegawai_gaji =$req->form_total_pegawai_gaji;
            $form_nomor_rekening_pegawai_gaji =$req->form_nomor_rekening_pegawai_gaji;
            $form_nama_bank_pegawai_gaji=$req->form_nama_bank_pegawai_gaji;
            $form_jabatan_pegawai_gaji=$req->form_jabatan_pegawai_gaji;
            
            $new = new GajiPegawai();
            // $new->add($form_id_pegawai_gaji,$kop,$kop,$vop,$vop,$vop,$kop,$vop,$kop,$kop,$kop);
            $new->id_pegawai_gaji = $form_id_pegawai_gaji;
            $new->nomor_ktp_pegawai_gaji = $form_nomor_ktp_pegawai_gaji;
            $new->nama_pegawai_gaji = $form_nama_pegawai_gaji;
            $new->jumlah_kehadiran_pegawai_gaji=$form_jumlah_kehadiran_pegawai_gaji;
            $new->rate_pegawai_gaji=$form_rate_pegawai_gaji;
            $new->tambahan_lainlain_pegawai_gaji=$form_tambahan_lainlain_pegawai_gaji;
            $new->keterangan_pegawai_gaji=$form_keterangan_pegawai_gaji;
            $new->total_pegawai_gaji=$form_total_pegawai_gaji;
            $new->jabatan_pegawai_gaji = $form_jabatan_pegawai_gaji;
            $new->nomor_rekening_pegawai_gaji =$form_nomor_rekening_pegawai_gaji;
            $new->nama_bank_pegawai_gaji=$form_nama_bank_pegawai_gaji;
      

            $new->save();
            return redirect("/");
          
        

    }

    public function Gajipegawaiselect()
    {
        if(Session::Has('datas')){
            $param['datas'] = Session::get('datas');
        }
        else{
            $data = DB::select("select * from pegawai_gaji order by created_at desc");
            $param['datas'] = $data;
            // dd($param['datas']);
        }
        return view("showgajipegawai",$param);
    }

    public function GajiPegawaiupdate(Request $brg, $id){
        $stok_awal = produk::where('id_produk',$id)
                            ->value('stok_produk');
        $updt_stok = $brg->stok_produk; //Stock terbaru
        $stok_berubah = $updt_stok - $stok_awal;
        $updt_hBeli = $brg->harga_beli;
        $updt_hJual = $brg->harga_jual;
        $updt_nama_dist = $brg->nama_dist;
        $updt_nomor_dist = $brg->nomor_dist;
        if ($stok_awal == $updt_stok) {
            produk::where('id_produk',$id)
                ->update(['harga_beli_produk' => $updt_hBeli, 'harga_jual_produk' => $updt_hJual, 'nama_distributor' => $updt_nama_dist, 'nomor_hp_distributor' => $updt_nomor_dist]);
        }else{
            $newMutasi = new mutasi;
            $newMutasi->id_produk = $id;
            $newMutasi->status_mutasi = 1;
            $newMutasi->waktu_mutasi = Carbon::now();
            $newMutasi->stok_awal = $stok_awal;
            $newMutasi->stok_berubah = $stok_berubah;
            $newMutasi->stok_akhir = $updt_stok;

            $newMutasi->save();

            produk::where('id_produk',$id)
                ->update(['harga_beli_produk' => $updt_hBeli, 
                            'harga_jual_produk' => $updt_hJual, 
                            'nama_distributor' => $updt_nama_dist, 
                            'nomor_hp_distributor' => $updt_nomor_dist, 
                            'stok_produk' => $updt_stok]);
        }
        return redirect("/admin");
    }
}
