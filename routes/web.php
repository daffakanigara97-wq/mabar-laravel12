<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;

Route::get('/ApaAja', function () {
    return view('murids.index');
});

Route::resource('murids', MuridController::class);