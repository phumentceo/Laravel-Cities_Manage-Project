<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\CityController;

Route::get('/',[CityController::class,'index'])->name('city.list');
Route::get('/create',[CityController::class,'create'])->name('city.create');
Route::get('/edit/{id}',[CityController::class,'edit'])->name('city.edit');
Route::get('/destroy/{id}',[CityController::class,'destroy'])->name('city.destroy');
Route::post('/getCity',[CityController::class,'getCity'])->name('city.get');
Route::post('/update1',[CityController::class,'update1'])->name('city.update1');
Route::post('/detail',[CityController::class,'detail'])->name('city.detail');