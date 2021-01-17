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
    public function indexPage($faculty, $major, $group) //todo добавить сортировку по времени
    {
        $students = Student::where('group_id', $group)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();
        $group_tab = Group::where('group_id', $group)->first();

        return view('student', compact('faculty_tab', 'major_tab', 'group_tab', 'students'));
    }

    public function editPage($faculty, $major, $group)
    {
        $students = Student::where('group_id', $group)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();
        $group_tab = Group::where('group_id', $group)->first();

        return view('groupedit', compact('faculty_tab', 'major_tab', 'group_tab', 'students'));
    }

    public function studentByDate($date) { //todo переместить в indexPage
        $students = Student::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        return view('students', compact('students'));
    }

    public function studentCreate($student_id, $name, $surname, $patronymic, $start_date, $groupName)
    {
        $student = new Student;

        $group = Group::where('name', $groupName)->get(['group_id']);
        //todo добавить проверку на повтор данных
        $student->save([
            ['$student_id'=>$student_id],
            ['$name'=>$name],
            ['$surname'=>$surname],
            ['$patronymic'=>$patronymic],
            ['$start_date'=>$start_date],
            ['group_id'=>$group],
        ]);
        return redirect()->route('student.index');
    }

    public function studentUpdate($name, $surname, $patronymic, $student_id)
    {
        $student = Student::where('student_id',$student_id)->update([
            ['name'=>$name],
            ['surname'=>$surname],
            ['patronymic'=>$patronymic],
            ]);
    }

    public function excludeStudent($id, $dateOfExlude)
    {
        $student = Student::where('id',$id)->update(['end_date' => $dateOfExlude]);
    }


}
