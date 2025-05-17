<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\CalculatorIMCController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Profile', function () {
    return view('UserProfile');
});

Route::get('/', function () {
    return view('inicio');
});


//IMC
/*Route::get('/imc/add/{weight}/{height}', [CalculatorIMCController::class, 'show']);
Route::get('/imc/all/', [CalculatorIMCController::class, 'index']);
Route::get('/imc/find/{id}', [CalculatorIMCController::class, 'find']);
Route::get('/imc/edit/{id}/{weight}/{height}', [CalculatorIMCController::class, 'edit']);
Route::get('/imc/delete/{id}', [CalculatorIMCController::class, 'destroy']);*/

// Route::resource('imc', CalculatorIMCController::class);
// Route::resource('recipes', RecipesController::class);
