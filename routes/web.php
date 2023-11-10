<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');

Route::get('/', [PekerjaController::class, 'index']);
Route::get('/pekerja/create', [PekerjaController::class, 'create']);
Route::post('/pekerja', [PekerjaController::class, 'store']);
Route::get('/pekerja/{id}/edit', [PekerjaController::class, 'edit']);
Route::put('/pekerja/{id}', [PekerjaController::class, 'update']);
Route::delete('/pekerja/{id}', [PekerjaController::class, 'destroy']);


Route::middleware(['auth'])->group(function () {
    // Rute yang membutuhkan otentikasi di sini

    Route::get('/home', 'Home@index')->name('home');
});