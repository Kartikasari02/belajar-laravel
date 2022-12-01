<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarangS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            "id" => '1122',
            "namabarang" => 'Indomie',
            "qty" => '1',
            "harga" => '3000',
            "barcode" => '0808',
            "created_at" => date("Y-m_d H:i:s"),
        ]);
    }
}
