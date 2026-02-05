<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PAcienteController;
Route::get('/paciente', [PAcienteController::class, 'index']);
Route::post('/paciente', [PAcienteController::class, 'store']);

use App\Http\Controllers\Api\MedicoController;

Route::get('/medico', [MedicoController::class, 'index']);
Route::post('/medico', [MedicoController::class, 'store']);
