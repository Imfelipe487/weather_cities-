<?php

use App\Http\Controllers\primerapantalla;
use Illuminate\Support\Facades\Route;

Route::get('/',[primerapantalla::class,'index'])->name('index');
Route::post('/information', [primerapantalla::class,'next'])->name('information');





