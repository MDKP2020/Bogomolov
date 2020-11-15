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
    public function index()
    {
        $faculties = Faculty::all();

        return view('faculty.index', ['faculties' => $faculties]);
    }
}
