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

Route::get('/usuarios', function (Request $request) {
    return Inertia::render('Usuarios/Index', [
        'users' => User::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),

        'filters' => $request->only(['search'])
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
