<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function fevtPage()
    {
        return view('fevt');
    }

}
