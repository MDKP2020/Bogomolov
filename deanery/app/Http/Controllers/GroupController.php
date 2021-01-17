<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Group;
use App\Models\Major;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupPage($id) {
        return view('group', compact('id'));
    }

    public function edit($id) {
        return view('groupedit', compact('id'));
    }


    /**
     * Показать список всех групп.
     *
     * @return Response|Factory
     */
    public function indexPage($faculty, $major) //todo добавить отображение по времени
    {
        $groups = Group::where('major_id', $major)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();

        return view('groups', compact('faculty_tab', 'major_tab', 'groups'));
    }

    public function getByCourse($faculty, $major, $course)
    {
        $groups = Group::where([
            ['major_id', $major],
            ['course_id', $course]
        ])->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();

        return view('groups', compact('faculty_tab', 'major_tab', 'groups'));
    }

    public function groupByDate($date) { //todo переместить в indexPage
        $groups = Group::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        return view('groups', compact('groups'));
    }

    public function transferToNextCourseAll() { //todo

    }

    public function transferToNextCourse($groupId) { //todo

    }
}
