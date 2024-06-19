<?php

namespace Database\Seeders;
use App\Models\Product; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama_produk'=>'Baju Pria',
            'harga_produk'=>50000,
            'gambar_produk'=> asset('img_product/baju_pria.jpg'),
            'deskripsi_produk'=> 'Ini adalah baju pria',
        ]);
        Product::create([
            'nama_produk'=>'Baju Wanita',
            'harga_produk'=>40000,
            'gambar_produk'=> asset('img_product/wanita_pria.jpg'),
            'deskripsi_produk'=> 'Ini adalah Pakaian Wanita',
        ]);
        Product::create([
            'nama_produk'=>'Aksesoris',
            'harga_produk'=>120000,
            'gambar_produk'=> asset('img_product/aksesoris.jpg'),
            'deskripsi_produk'=> 'Aksesoris Bagus',
        ]);
    }
}
