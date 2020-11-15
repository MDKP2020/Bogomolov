<?php

namespace App\Http\Controllers;

use App\Models\Group;
use http\Client\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupPage($id) {
        return view('group', compact('id'));
    }

    public function edit($id) {
        return view('groupedit', compact('id'));
    }

    public function prin4Page()
    {
        return view('prin4');
    }

    /**
     * Показать список всех групп.
     *
     * @return Response|Factory
     */
    public function index()
    {
        $groups = Group::all();

        return view('group.index', ['groups' => $groups]);
    }
}
