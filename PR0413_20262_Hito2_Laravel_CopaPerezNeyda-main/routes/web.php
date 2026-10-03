<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recursos', [RecursoController::class, 'index'])->name('recursos.index');
Route::get('/recursos/create', [RecursoController::class, 'create'])->name('recursos.create');
Route::post('/recursos', [RecursoController::class, 'store'])->name('recursos.store');