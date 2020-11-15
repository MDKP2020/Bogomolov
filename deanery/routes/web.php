<?php

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

Route::get('/faculties', 'App\Http\Controllers\FacultiesController@facultiesPage');

Route::get('/faculties/edit', 'App\Http\Controllers\FacultiesController@edit');

Route::get('/fevt/majors', 'App\Http\Controllers\MajorsController@fevtPage');

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



