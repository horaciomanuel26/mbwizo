<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('capa');
});

Route::get('/mensagens', function () {
    return view('admin.mensagens.index');
})->name('mensagens');

// Rotas com o prefixo 'publicar'
Route::prefix('publicar')->group(function () {
    Route::get('/index', ['App\Http\Controllers\admin\PublicarController'::class, 'index'])->name('publicar.index');
    Route::post('/create', ['App\Http\Controllers\admin\PublicarController'::class, 'create'])->name('publicar.create');
});
Route::prefix('perfil')->group(function () {
    Route::get('/index', ['App\Http\Controllers\admin\PerfilController'::class, 'index'])->name('perfil.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/index', ['App\Http\Controllers\admin\HomeController'::class, 'index'])->name('index');

    /*Route::get('/index', function () {
        return view('index');
    })->name('index');*/
});
