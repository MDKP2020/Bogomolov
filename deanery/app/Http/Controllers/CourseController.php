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

    /**
     * Показать список всех курсов.
     *
     * @return Response|Factory
     */
    public function indexPage()
    {
        $courses = course::all();

        return view('courses', compact('courses'));
    }

    /**
     * Создать новый курс
     *
     */
    public function createNewCourse(Course $request)
    {
        $course = $request['course'];

        $new_student = Course::findOrFail($course); //todo

    }
}
