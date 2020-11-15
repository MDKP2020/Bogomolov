<?php

namespace App\Http\Controllers;

class MajorsController extends Controller
{
    public function fevtPage()
    {
        return view('fevt');
    }

    public function edit() {
        return view('fevtedit');
    }
}
