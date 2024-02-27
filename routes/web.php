<?php

use Illuminate\Support\Facades\Route;

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

// Register
use App\Http\Controllers\RegisteredUserController;
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

// Login
Use App\Http\Controllers\LoginController;
Route::controller(LoginController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->middleware('auth');
});

// Veiculos
Use App\Http\Controllers\VeiculoController;
Route::controller(VeiculoController::class)->group(function () {
    Route::get('/veiculo/create', 'create');
    Route::post('/veiculo/store', 'store');
    Route::get('/veiculo/show/{id}', 'show');
    Route::get('/veiculo/dashboard', 'dashboard');
    Route::delete('/veiculo/destroy/{id}', 'destroy');
    Route::get('/veiculo/edit/{id}', 'edit');
    Route::put('/veiculo/update/{id}', 'update');
})->middleware('auth');

// Clientes
use App\Http\Controllers\PessoaController;
Route::controller(PessoaController::class)->group(function (){
    Route::get('/pessoa/create', 'create');
    Route::post('/pessoa/store', 'store');
    Route::get('/pessoa/{id}', 'show');
})->middleware('auth');