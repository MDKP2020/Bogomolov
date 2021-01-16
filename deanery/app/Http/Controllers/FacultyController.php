<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function facultiesPage() {
        return view('faculties');
    }

    /**
     * Показать список всех факультетов.
     *
     * @return Response|Factory
     */
    public function indexPage()//todo добавить сортировку по времени
    {
        $faculties = Faculty::all();

        return view('faculties', compact('faculties'));
    }

    public function courseByDate($date) { //todo переместить в inddexPage
        $faculties = Faculty::where([
            ['start_date','<=',$date],
            ['end_date','>=',$date]
        ])->get();

        return view('faculties', compact('faculties'));
    }

    public function createFaculty() //todo
    {}

    public function updateFaculty($facultyId) //todo
    {}

    public function closeFaculty($faultyId) //todo
    {}


}
