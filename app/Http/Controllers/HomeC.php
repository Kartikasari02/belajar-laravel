<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\prestasi;
use App\Models\pesertadidik;
use App\Models\eskul;
=======
use App\Models\KonsumenS;
use App\Models\BarangS;
>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10

class HomeC extends Controller
{
    Public function index(){
        $user = ['name' => 'Dazai', 'role' => 'teller'];
        return view('pages.home', $user);
    }
    Public function about(){
        $user = ['name' => 'Yufa', 'role' => 'admin'];
        return view('pages.about', $user);
    }
<<<<<<< HEAD
    public function PesertaDidik(){
        $data = pesertadidik::all();
        return view('pages.pesertadidik', ['data' => $data]);
    }
    public function Eskul(){
        $data = eskul::all();
        return view('pages.eskul', ['data' => $data]);
    }
    public function Prestasi(){
        $data = prestasi::all();
        return view('pages.prestasi', ['data' => $data]);
=======
    public function barang(){
        $data = BarangS::all();
        return view('pages.barang', ['data' => $data]);
    }
    public function konsumen(){
        $data = KonsumenS::all();
        return view('pages.konsumen', ['data' => $data]);
>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10
    }
}
