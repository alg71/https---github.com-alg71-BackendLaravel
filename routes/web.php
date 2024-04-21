<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [UsuarioController::class, 'create'])->name('registro.create');
Route::post('/registro', [UsuarioController::class, 'store'])->name('registro.store');
Route::get('/delete', [UsuarioController::class, 'delete'])->name('delete.index');
Route::delete('/delete', [UsuarioController::class, 'destroy'])->name('delete.destroy');
