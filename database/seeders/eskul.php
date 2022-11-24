<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class eskul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eskul')->insert([
            "id" => '01',
            "namaeskul" => 'ITC',
            "namapembina" => 'Egi Nugraha',
            "jumlahanggota" => '42'
        ]);

        DB::table('eskul')->insert([
        "id" => '02',
            "namaeskul" => 'HOVER',
            "namapembina" => 'Asep Ramdan',
            "jumlahanggota" => '50'
        ]);

        DB::table('eskul')->insert([
            "id" => '03',
                "namaeskul" => 'KIR',
                "namapembina" => 'Yugi',
                "jumlahanggota" => '45'
            ]);
    }
}
