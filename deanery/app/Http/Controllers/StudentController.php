<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentPage($id) {
        return view('student', ['student' => Student::findOrFail($id)]);
    }

    public function makeNewStudent(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;

        $student->save();
    }

    public function excludeStudent($id)
    {
        $student = new Student;

        $student->changeExcludeStatus($id, true);
    }


}
