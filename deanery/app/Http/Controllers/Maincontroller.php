<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Faculties;
use App\Models\Majors;
use App\Models\Studens;
use App\Models\Student;

class Maincontroller extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function coursesPage($id)
    {
        return view('courses', ['courses' => Courses::findOrFail($id)]);
    }

    public function facultiesPage($id) {
        return view('faculties', ['faculties' => Faculties::findOrFail($id)]);
    }

    public function majorsPage($id) {
        return view('majors', ['majors' => Majors::findOrFail($id)]);
    }

    public function groupsPage($id) {
        return view('groups', ['groups' => Groups::findOrFail($id)]);
    }

    public function groupPage($id) {
        return view('Group', ['Group' => Group::findOrFail($id)]);
    }

    public function studentPage($id) {
        return view('student', ['student' => Student::findOrFail($id)]);
    }

    public function makeNewStudent(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;

        $student->save();

    }


}
