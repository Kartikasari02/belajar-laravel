<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class KonsumenS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konsumen')->insert([
            "id" => "12100361",
            "namalengkap" => "Kartika Sari Dewi",
            "jk" =>"P",
            "umur" =>"17",
            "created_at" => date("Y-m_d H:i:s"),
        ]);
       
    }
}
