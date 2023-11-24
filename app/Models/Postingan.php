<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    protected $table = "postingan";
    protected $fillable = ["name", "kategori_postingan_id", "image", "deskripsi"];

    public function kategori_postingan()
    {
        return $this->belongsTo('App\KategoriPostingan');
    }
}

