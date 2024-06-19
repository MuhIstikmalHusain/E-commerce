<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table= 'product';
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'gambar_produk',
        'deskripsi_produk',
    ];

    public function pesananDetails()
    {
        return $this->hasMany(PesananDetail::class);
    }
}
