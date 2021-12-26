<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConverterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Маршрут для загрузки формы
Route::get(
    '/',
    [ConverterController::class, 'index']
)->name('index');

// Маршрут для вычисление факториала числа
Route::post(
    '/',
    [ConverterController::class, 'fahrenheit']
)->name('fahrenheit');
