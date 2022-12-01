<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KonsumenS;
use App\Models\BarangS;

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
    public function barang(){
        $data = BarangS::all();
        return view('pages.barang', ['data' => $data]);
    }
    public function konsumen(){
        $data = KonsumenS::all();
        return view('pages.konsumen', ['data' => $data]);
    }
}
