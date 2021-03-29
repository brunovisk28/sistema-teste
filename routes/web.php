<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\locadoraController;

Route::get('/locadora',[locadoraController::class, 'index']);
Route::post('/locadora',[locadoraController::class, 'index']);

