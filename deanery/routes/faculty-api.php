<?php

use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FacultyController::class, 'getAll']);

Route::get('/{id}', [FacultyController::class, 'findById']);

Route::post('/', [FacultyController::class, 'create']);

Route::put('/{id}', [FacultyController::class, 'update']);

Route::delete('/{id}', [FacultyController::class, 'delete']);
