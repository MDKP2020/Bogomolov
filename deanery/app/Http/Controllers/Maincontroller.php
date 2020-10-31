<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Groups;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Faculties;
use App\Models\Majors;
use App\Models\Studens;
use App\Models\Student;

class Maincontroller extends Controller
{
    public function homePage(){
        return view('home');
    }
}
