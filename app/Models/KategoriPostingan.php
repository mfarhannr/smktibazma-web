<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPostingan extends Model
{
    use HasFactory;
    protected $table = "kategori_postingan";
    protected $fillable = ["name"];

    public function postingan()
    {
        return $this->hasOne('App\Postingan');
    }
}
