<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\GajiPegawai;


class gajipegawaiController extends Controller
{
    public function Gajipegawai(){
        return view("showgajipegawai");
    }
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
}
