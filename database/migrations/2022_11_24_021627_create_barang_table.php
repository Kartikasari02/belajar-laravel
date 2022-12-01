<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2022_11_24_072113_create_prestasi_table.php
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('namaprestasi');
            $table->string('tingkat');
            $table->string('juarake');
            $table->string('namapeserta');
========
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang');
            $table->string('qty');
            $table->string('harga');
            $table->string('barcode')->unique();
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:database/migrations/2022_11_24_021627_create_barang_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2022_11_24_072113_create_prestasi_table.php
        Schema::dropIfExists('prestasi');
========
        Schema::dropIfExists('barang');
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:database/migrations/2022_11_24_021627_create_barang_table.php
    }
};
