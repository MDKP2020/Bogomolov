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

    public function fevtPage()
    {
        return view('fevt');
    }

    /**
     * Показать список всех специальностей.
     *
     * @return Response|Factory
     */
    public function indexPage($id)
    {
        $majors = Major::where('faculty_id', '=', $id)->get();

        return view('majors', compact('majors'));
    }

    public function majorByDate($date)
    {
        //todo
    }

    public function majorDelete($id)
    {

    }

    public function majorCreate()
    {

    }

    public function majorUpdate()
    {

    }
}
