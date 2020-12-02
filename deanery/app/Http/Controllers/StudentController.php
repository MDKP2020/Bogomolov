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
    public function indexPage($id)
    {
        $students = Student::where('group_id', '=', $id)->get();

        return view('group', compact('students'));
    }

    public function editPage($id)
    {
        $students = Student::where('group_id', '=', $id)->get();

        return view('groupedit', compact('students'));
    }

    public function studentCreate(Request $request)
    {
        $student = new Student;

        $student->name = $request->

        $student->save();
        return redirect()->route('student.index');
    }

    public function getAll() {
        return Student::all();
    }

    public function studentDelete($id)
    {

    }

    public function studentUpdate()
    {

    }

    public function excludeStudent($id)
    {

    }


}
