<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi;
use App\Models\pesertadidik;
use App\Models\eskul;

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
    }
}
