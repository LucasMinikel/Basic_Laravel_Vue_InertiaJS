<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');



Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    });
    Route::prefix('usuarios')->group(function () {
        Route::get('/', [UsuarioController::class, 'index']);
        Route::get('/create', [UsuarioController::class, 'create'])->can('create', User::class);
        Route::post('/', [UsuarioController::class, 'store']);
    });
    Route::get('/configuracao', function () {
        return Inertia::render('Configuracao');
    });
});
