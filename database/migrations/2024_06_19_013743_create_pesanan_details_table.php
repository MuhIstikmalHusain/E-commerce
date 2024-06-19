<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Perbaiki definisi kolom
            $table->unsignedBigInteger('pesanan_id'); // Tambahkan kolom pesanan_id
            $table->foreign('product_id')->references('id')->on('product'); // Foreign key untuk product
            $table->foreign('pesanan_id')->references('id')->on('pesanans'); // Foreign key untuk pesanan
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_details');
    }
};
