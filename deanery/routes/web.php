<?php

use App\Http\Controllers\CourseController;
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

//Route::get('/faculties', 'App\Http\Controllers\FacultiesController@facultiesPage');

Route::get('/courses', [CourseController::class, 'indexPage'])->name('courses.index');

Route::get('/4/faculties', [FacultyController::class, 'indexPage'])->name('faculties.index');

Route::get('/4/{id}/majors', [MajorController::class, 'indexPage'])->name('majors.index');

Route::get('/4/5/{id}/groups', [GroupController::class, 'indexPage'])->name('groups.index');

Route::get('/4/5/2/{id}', [StudentController::class, 'indexPage'])->name('students.index');

Route::get('/4/5/2/{id}/edit', [StudentController::class, 'editPage'])->name('students.index');

Route::get('/fevt/majors/edit', 'App\Http\Controllers\MajorsController@edit');

Route::get('/fevt/prin/courses', 'App\Http\Controllers\CoursesController@prinPage');

Route::get('/fevt/prin/courses/edit', 'App\Http\Controllers\CoursesController@edit');

Route::get('/fevt/prin/4/groups', 'App\Http\Controllers\GroupsController@prin4Page');

Route::get('/fevt/prin/4/edit', 'App\Http\Controllers\GroupsController@edit');

Route::get('/fevt/prin/4/{id}', [GroupController::class, 'groupPage']);

Route::get('/fevt/prin/4/{id}/edit', [GroupController::class, 'edit']);

//Route::get('/majors', 'Maincontroller@majorsPage');
//
//Route::get('/groups', 'Maincontroller@groupsPage');
//
//Route::get('/students', 'Maincontroller@studentsPage');
//
//Route::get('/student', 'Maincontroller@studentPage');



