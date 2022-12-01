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
<<<<<<<< HEAD:database/migrations/2022_11_24_072040_create_eskul_table.php
        Schema::create('eskul', function (Blueprint $table) {
            $table->id();
            $table->string('namaeskul');
            $table->string('namapembina');
            $table->string('jumlahanggota');
            $table->timestamps();
            
========
        Schema::create('konsumen', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('jk');
            $table->string('umur');
            $table->timestamps();
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:database/migrations/2022_11_24_021601_create_konsumen_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2022_11_24_072040_create_eskul_table.php
        Schema::dropIfExists('eskul');
========
        Schema::dropIfExists('konsumen');
>>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10:database/migrations/2022_11_24_021601_create_konsumen_table.php
    }
};
