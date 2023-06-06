<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    //hubungin table 
    protected $table = 'kategori_produk';

    // bikin relasi
    public function produk(){
        return $this ->hasMany(Produk::class);
    }
}
