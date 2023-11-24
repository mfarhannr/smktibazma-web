<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KatalogTalenta extends Model
{
    use HasFactory;
    protected $table = "katalog_talenta";

    protected $fillable = ['gambar', 'name', 'bidang' ];
}
