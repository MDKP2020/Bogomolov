<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MajorController::class, 'getAll']);

Route::get('/{id}', [MajorController::class, 'findById']);

Route::post('/', [MajorController::class, 'create']);

Route::put('/{id}', [MajorController::class, 'update']);

Route::delete('/{id}', [MajorController::class, 'delete']);
