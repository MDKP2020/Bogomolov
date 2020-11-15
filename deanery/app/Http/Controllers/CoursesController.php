<?php

namespace App\Http\Controllers;

class CoursesController extends Controller
{
    public function prinPage()
    {
        return view('prin');
    }
    public function edit() {
        return view('prinedit');
    }
}
