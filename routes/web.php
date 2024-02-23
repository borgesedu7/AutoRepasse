<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RegisteredUserController;
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Use App\Http\Controllers\LoginController;
Route::controller(LoginController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('logout', 'destroy')->middleware('auth');
});

Use App\Http\Controllers\VeiculoController;
Route::controller(VeiculoController::class)->group(function () {
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/veiculos/{id}', 'show');
    Route::get('/dashboard', 'dashboard');
    Route::delete('/veiculos/{id}', 'destroy');
    Route::get('/veiculos/edit/{id}', 'edit');
    Route::put('/veiculos/update/{id}', 'update');
});
