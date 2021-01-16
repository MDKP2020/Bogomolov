<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use App\Models\Student;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function majorPage($id) {
        return view('major', ['major' => Major::findOrFail($id)]);
    }

    /**
     * Показать список всех специальностей.
     *
     * @return Response|Factory
     */
    public function indexPage($faculty) //todo добавить отображение на дату
    {
        $majors = Major::where('faculty_id',  $faculty)->get();
        $faculty_tab = Faculty::where('faculty_id', $faculty)->first();

        return view('majors', compact('faculty_tab', 'majors'));
    }

    public function majorByDate($date)//todo переписать в indexPage
    {
        $majors = Major::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        return view('majors', compact('majors'));
    }

    public function closeMajor($majorId)
    {
        //todo добавить дату в end_date курсу с помощью этой функции
    }

    public function majorCreate() // todo
    {

    }

    public function majorUpdate()//todo
    {

    }
}
