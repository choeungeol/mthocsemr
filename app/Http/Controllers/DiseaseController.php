<?php

namespace App\Http\Controllers;

class DiseaseController extends Controller
{
    public function getMain() {

        return view('app.disease.main');
    }
}
