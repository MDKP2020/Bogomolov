<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupPage($id) {
        return view('group', compact('id'));
    }

    public function edit($id) {
        return view('groupedit', compact('id'));
    }
}
