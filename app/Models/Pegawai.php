<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public $table   = "pegawai";
    public $primaryKey = "username";
    public $incrementing = false;
    public $timestamps = true;
    public $fillable = ['Username','Password','Nama_pegawai','Role','Nomor_telp_pegawai','Jabatan_pegawai'];
    public function add($username,$password,$nama_pegawai,$role,$Nomor_telp_pegawai,$Jabatan_pegawai)
    {
        $new = new Pegawais();
        $new->Username = $username;
        $new->Password = $password;
        $new->Nama_pegawai = $nama_pegawai;
        $new->Role = $role;
        $new->Nomor_telp_pegawai;
        $new->Jabatan_pegawai;
        $new->save();
    }
}
