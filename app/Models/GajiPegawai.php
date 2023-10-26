<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiPegawai extends Model
{
    use HasFactory;
    public $table   = "pegawai_gaji";
    public $primaryKey = "id_pegawai_gaji";
    public $incrementing = false;
    public $timestamps = true;
    public $fillable = ['id_pegawai_gaji','nomor_ktp_pegawai_gaji','nama_pegawai_gaji','jumlah_kehadiran_pegawai_gaji','rate_pegawai_gaji','tambahan_lainlain_pegawai_gaji','keterangan_pegawai_gaji','total_pegawai_gaji','jabatan_pegawai_gaji','nomor_rekening_pegawai_gaji','nama_bank_pegawai_gaji'];
    public function add($id_pegawai_gaji,$nomor_ktp_pegawai_gaji,$nama_pegawai_gaji,$jumlah_kehadiran_pegawai_gaji,$rate_pegawai_gaji,$tambahan_lainlain_pegawai_gaji,$keterangan_pegawai_gaji,$total_pegawai_gaji,$jabatan_pegawai_gaji,$nomor_rekening_pegawai_gaji,$nama_bank_pegawai_gaji)
    {
        $new = new GajiPegawai();
        $new->id_pegawai_gaji = $id_pegawai_gaji;
        $new->nomor_ktp_pegawai_gaji = $nomor_ktp_pegawai_gaji;
        $new->nama_pegawai_gaji = $nama_pegawai_gaji;
        $new->jumlah_kehadiran_pegawai_gaji = $jumlah_kehadiran_pegawai_gaji;
        $new->rate_pegawai_gaji=$rate_pegawai_gaji;
        $new->tambahan_lainlain_pegawai_gaji=$tambahan_lainlain_pegawai_gaji;
        $new->keterangan_pegawai_gaji=$keterangan_pegawai_gaji;
        $new->total_pegawai_gaji=$total_pegawai_gaji;
        $new->jabatan_pegawai_gaji=$jabatan_pegawai_gaji;
        $new->nomor_rekening_pegawai_gaji=$nomor_rekening_pegawai_gaji;
        $new->nama_bank_pegawai_gaji=$nama_bank_pegawai_gaji;
        $new->save();
    }

    

}
