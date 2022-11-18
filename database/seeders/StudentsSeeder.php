<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap" => "Kartika Sari Dewi",
            "nis" =>12100368,
            "jk" =>"P",
            "created_at" => date("Y-m_d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Muthia Zahra Rukmana",
            "nis" =>12100369,
            "jk" =>"L",
            "created_at" => date("Y-m_d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Syawali",
            "nis" =>12100370,
            "jk" =>"P",
            "created_at" => date("Y-m_d H:i:s"),
        ]);
    }
}
