<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DevTest;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'App\Http\Controllers\MainController@homePage');

Route::get('/faculties', [FacultyController::class, 'indexPage'])->name('faculties.index');

Route::get('/{faculty}/majors', [MajorController::class, 'indexPage'])->name('majors.index');

Route::get('/{faculty}/{major}/groups', [GroupController::class, 'indexPage'])->name('groups.index');

Route::get('/{faculty}/{major}/groups/{course}', [GroupController::class, 'getByCourse'])->name('groups.index');

Route::get('/{faculty}/{major}/{group}', [StudentController::class, 'indexPage'])->name('students.index');

Route::get('/{faculty}/{major}/{group}/edit', [StudentController::class, 'editPage'])->name('students.index');

//todo вывод по дате
//Route::get('/fevt/prin/4/{id}', [GroupController::class, 'groupPage']);
//
//Route::get('/fevt/prin/4/{id}/edit', [GroupController::class, 'edit']);

