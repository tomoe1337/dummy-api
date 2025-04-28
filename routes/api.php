<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\FetchAndSaveIphonesController;
use App\Http\Controllers\Product\GetAllIphonesController;
use App\Http\Controllers\Product\AddProductController;


Route::post('/fetch-iphones', FetchAndSaveIphonesController::class);
Route::get('/iphones', GetAllIphonesController::class);
Route::post('/products/add', AddProductController::class);
