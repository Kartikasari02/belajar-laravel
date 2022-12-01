<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;


//URL Index
Route::redirect('/', 'home');
Route::get('/home',[HomeC::class, 'index']);
Route::get('/about',[HomeC::class, 'about']);
<<<<<<< HEAD
Route::get('/pesertadidik',[HomeC::class, 'pesertadidik']);
Route::get('/eskul',[HomeC::class, 'eskul']);
Route::get('/prestasi',[HomeC::class, 'prestasi']);
=======
Route::get('/barang',[HomeC::class, 'barang']);
Route::get('/konsumen',[HomeC::class, 'konsumen']);
>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10
