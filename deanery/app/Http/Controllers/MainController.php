<?php

namespace App\Http\Controllers;

class MainController extends Controller {
    public function homePage() {
        return view('home');
    }
}
