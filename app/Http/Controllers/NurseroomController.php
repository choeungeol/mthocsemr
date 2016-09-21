<?php

namespace App\Http\Controllers;

class NurseroomController extends Controller
{
    public function getMain() {

        return view('app.nurseroom.main');
    }
}
