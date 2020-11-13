<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Client\Response;
use Illuminate\Http\Request;
use \Illuminate\Contracts\Foundation\Application;
use \Illuminate\View\View;
use \Illuminate\Contracts\View\Factory;

class StudentController extends Controller
{
    /**
     *
     */
    public function studentPage($id) {
        return view('student.index', ['student' => Student::findOrFail($id)]);
    }

    /**
     * Показать список всех студентов.
     *
     * @return Response|Factory
     */
    public function index()
    {
        $students = Student::all();

        return view('student.index', ['students' => $students]);
    }

    public function studentCreate(Request $request)
    {
        $student = new Student;

        $student->name = $request->name; //todo

        $student->save();
    }

    public function studentDelete($id)
    {

    }

    public function studentUpdate()
    {

    }

    public function excludeStudent($id)
    {
        $student = new Student;

        $student->changeExcludeStatus($id, true);
    }


}
