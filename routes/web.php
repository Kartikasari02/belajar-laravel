<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;


//URL Index
Route::redirect('/', 'home');
Route::get('/home',[HomeC::class, 'index']);
Route::get('/about',[HomeC::class, 'about']);
Route::get('/pesertadidik',[HomeC::class, 'pesertadidik']);
Route::get('/eskul',[HomeC::class, 'eskul']);
Route::get('/prestasi',[HomeC::class, 'prestasi']);
