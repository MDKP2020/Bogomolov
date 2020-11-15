<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'getAll']);

Route::get('/{id}', [StudentController::class, 'findById']);

Route::post('/', [StudentController::class, 'create']);

Route::put('/{id}', [StudentController::class, 'update']);

Route::delete('/{id}', [StudentController::class, 'delete']);
