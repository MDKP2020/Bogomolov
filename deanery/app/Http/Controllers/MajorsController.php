<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function majorsPage($id) {
        return view('majors', ['majors' => Majors::findOrFail($id)]);
    }

}
