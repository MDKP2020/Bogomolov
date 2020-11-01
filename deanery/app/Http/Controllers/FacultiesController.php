<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    public function facultiesPage() {
        return view('faculties');
    }
}
