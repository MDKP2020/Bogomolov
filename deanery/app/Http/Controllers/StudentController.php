<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Group;
use App\Models\Major;
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
    public function indexPage($faculty, $major, $group)
    {
        $students = Student::where('group_id', $group)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();
        $group_tab = Group::where('group_id', $group)->first();

        return view('group', compact('faculty_tab', 'major_tab', 'group_tab', 'students'));
    }

    public function editPage($faculty, $major, $group)
    {
        $students = Student::where('group_id', $group)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();
        $group_tab = Group::where('group_id', $group)->first();

        return view('groupedit', compact('faculty_tab', 'major_tab', 'group_tab', 'students'));
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
