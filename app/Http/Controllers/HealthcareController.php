<?php

namespace App\Http\Controllers;


class HealthcareController extends Controller
{
    public function getMain() {

        return view('app.healthcare.main');
    }
}
