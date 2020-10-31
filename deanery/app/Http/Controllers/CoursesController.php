<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function coursesPage($id)
    {
        return view('courses', ['courses' => Courses::findOrFail($id)]);
    }
}
