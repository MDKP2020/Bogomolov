<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/faculties', 'App\Http\Controllers\FacultyController@facultiesPage');

Route::get('/fevt/majors', 'App\Http\Controllers\MajorController@fevtPage');

Route::get('/fevt/prin/courses', 'App\Http\Controllers\CourseController@prinPage');

Route::get('/fevt/prin/4/groups', 'App\Http\Controllers\GroupController@prin4Page');

//Route::get('/majors', 'Maincontroller@majorsPage');
//
//Route::get('/groups', 'Maincontroller@groupsPage');
//
//Route::get('/students', 'Maincontroller@studentsPage');
//
//Route::get('/student', 'Maincontroller@studentPage');



