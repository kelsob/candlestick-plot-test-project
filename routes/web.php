<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::get('/chart', [ChartController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

