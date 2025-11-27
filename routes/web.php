<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PocaoController;

Route::resource('pocoes', PocaoController::class);
