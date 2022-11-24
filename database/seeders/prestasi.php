<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class prestasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestasi')->insert([
            "id" => '01',
            "namaprestasi" => 'lomba puisi',
            "tingkat" => 'SMK',
            "juarake" => '1',
            "namapeserta" => 'kartika sari dewi',
            
        ]);
        DB::table('prestasi')->insert([
            "id" => '02',
            "namaprestasi" => 'lomba hilo',
            "tingkat" => 'nasional',
            "juarake" => '1',
            "namapeserta" => 'nurul eka maryana',
            
        ]);
        DB::table('prestasi')->insert([
            "id" => '03',
            "namaprestasi" => 'lomba paskibra',
            "tingkat" => 'provinsi',
            "juarake" => '1',
            "namapeserta" => 'selly aprila',
            
        ]);
    }
}
