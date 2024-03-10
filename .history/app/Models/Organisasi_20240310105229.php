<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisasi extends Model
{
    use HasFactory;
    protected $table = "Organisasis";

    protected $fillable = ['nama_organisasi','talent_id', 'deskripsi_organisasi', 'tanggal_organisasi', 'nama_prestasi', 'deskripsi_prestasi', 'tanggal_prestasi', 'nama_sertifikasi', 'deskripsi_sertifikasi', 'tanggal_sertifikasi', 'nama_pengalaman', 'deskripsi_pengalaman', 'tanggal_pengalaman' ];
}
