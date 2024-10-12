<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire; // Asegúrate de que Livewire está importado

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

