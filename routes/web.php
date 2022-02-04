<?php

use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/usuarios', function () {
    return Inertia::render('Usuarios/Index', [
        'users' => User::paginate(10)
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name
            ])
    ]);
});

Route::get('/usuarios/create', function () {
    return Inertia::render('Usuarios/Create');
});



Route::post('/usuarios', function (Request $request) {
    $attributes = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);

    User::create($attributes);

    return redirect('/usuarios');
});















Route::get('/configuracao', function () {
    return Inertia::render('Configuracao');
});

Route::post('/logout', function () {
    dd(request('foo'));
});
