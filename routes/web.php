<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
