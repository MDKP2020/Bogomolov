<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GroupController::class, 'getAll']);

Route::get('/{id}', [GroupController::class, 'findById']);

Route::post('/', [GroupController::class, 'create']);

Route::put('/{id}', [GroupController::class, 'update']);

Route::delete('/{id}', [GroupController::class, 'delete']);
