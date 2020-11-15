<?php

namespace App\Http\Controllers;

use App\Models\Course;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function coursePage($id)
    {
        return view('course', ['course' => Course::findOrFail($id)]);
    }

    public function prinPage()
    {
        return view('prin');
    }

    /**
     * Показать список всех курсов.
     *
     * @return Response|Factory
     */
    public function index()
    {
        $courses = course::all();

        return view('course.index', ['courses' => $courses]);
    }
}
