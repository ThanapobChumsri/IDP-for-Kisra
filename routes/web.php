<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/firstpage', [MenuController::class, 'index']);
Route::get('/filter', [FoodController::class, 'filterByMaterial']);
