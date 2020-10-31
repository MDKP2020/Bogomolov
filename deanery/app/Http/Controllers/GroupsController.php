<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function groupsPage($id) {
        return view('groups', ['groups' => Groups::findOrFail($id)]);
    }
}
