<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table = "kategori_galeri";
    protected $fillable = ["name"];

    public function galeri()
    {
        return $this->hasMany(Postingan::class, 'kategori_galeri_id');
    }
}
