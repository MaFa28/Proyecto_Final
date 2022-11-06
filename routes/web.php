<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\MascotaController;

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

///Rutas
Route::resource('citas', CitaController::class);//->middleware('auth');
Route::resource('mascotas', MascotaController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
