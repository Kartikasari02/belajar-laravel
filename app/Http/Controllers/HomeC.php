<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsM;

class HomeC extends Controller
{
    Public function index(){
        $user = ['name' => 'Fariz', 'role' => 'teller'];
        return view('pages.home', $user);
    }
    Public function about(){
        $user = ['name' => 'Asep', 'role' => 'admin'];
        return view('pages.about', $user);
    }
    public function contact(){
        $data = StudentsM::all();
        return view('pages.contact', ['data' => $data]);
    }
}
