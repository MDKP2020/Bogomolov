<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'getAll']);

Route::get('/{id}', [CourseController::class, 'findById']);

Route::post('/', [CourseController::class, 'create']);

Route::put('/{id}', [CourseController::class, 'update']);

Route::delete('/{id}', [CourseController::class, 'delete']);
