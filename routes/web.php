<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;

Route::get('/', function () {
    return view('welcome');
});

//URL About
Route::get('about', function () {
    return 'Ini Halaman About';
});

//URL Index / Home
Route::get('/', function () {
    $user = ['name' => 'David', 'role' => 'teller'];
    return view('pages.home', $user);
});

Route::get('/home',[HomeC::class, 'index']);
Route::get('/home',[HomeC::class, 'About']);
Route::get('/home',[HomeC::class, 'Contact']);

Route::get('/about', function(){
    $user = ['name' => 'Asep', 'role' => 'admin'];
    return view('pages.about', $user);
});

Route::get('/contact', function(){
    $data = [
        "person" => ["Rizky", "Gavin", "Firdaus", "Dzaky", "Iqbal"]
    ];
    return view('pages.contact', $data);
});
