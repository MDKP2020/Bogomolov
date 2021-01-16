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
    public function indexPage($faculty, $major)
    {
        $groups = Group::where('major_id', $major)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();

        return view('groups', compact('faculty_tab', 'major_tab', 'groups'));
    }

    public function getByCourse($faculty, $major, $course)
    {
        $groups = Group::where([['major_id', $major], ['course_id', $course]])->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();
        $major_tab = Major::where('major_id', $major)->first();

        return view('groups', compact('faculty_tab', 'major_tab', 'groups'));
    }
}
