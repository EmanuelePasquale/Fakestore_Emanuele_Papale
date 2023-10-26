<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreController;


Route::get('/', [StoreController::class,'index'])->name('index');
Route::get('/show/{id}', [StoreController::class,'show'])->name('show');