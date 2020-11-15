<?php

namespace App\Http\Controllers;

class FacultiesController extends Controller
{
    public function facultiesPage() {
        return view('faculties');
    }

    public function edit() {
        return view('facultiesedit');
    }
}
