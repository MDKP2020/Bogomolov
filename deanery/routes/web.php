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

Route::get('/', 'Maincontroller@homePage');

Route::get('/courses', 'Maincontroller@coursesPage');

Route::get('/faculties', 'Maincontroller@facultiesPage');

Route::get('/majors', 'Maincontroller@majorsPage');

Route::get('/groups', 'Maincontroller@groupsPage');

Route::get('/students', 'Maincontroller@studentsPage');

Route::get('/student', 'Maincontroller@studentPage');



