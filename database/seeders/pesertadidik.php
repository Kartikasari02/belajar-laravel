<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pesertadidik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertadidik')->insert([
            "id" => '01',
            "nis" => '12100361',
            "namalengkap" => 'kartika sari dewi',
            "jk" => 'P',
            "kelas" => '11 RPL 1',
            "alamat" => 'cijambe',
            "status" => 'pelajar',
        ]);
        DB::table('pesertadidik')->insert([
            "id" => '02',
            "nis" => '12100362',
            "namalengkap" => 'yufa gina maryafa',
            "jk" => 'P',
            "kelas" => '11 RPL 1',
            "alamat" => 'binong',
            "status" => 'pelajar',
        ]);
        DB::table('pesertadidik')->insert([
            "id" => '03',
            "nis" => '12100363',
            "namalengkap" => 'nurul eka maryana',
            "jk" => 'P',
            "kelas" => '11 RPL 1',
            "alamat" => 'subang',
            "status" => 'pelajar',
        ]);
    }
}
