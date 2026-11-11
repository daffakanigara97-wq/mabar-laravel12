<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\MuridController;

Route::get('/ApaAja', function () {
    return view('murids.index');
});
