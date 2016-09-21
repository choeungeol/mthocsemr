<?php

namespace App\Http\Controllers;

class PharmacyController extends Controller
{
    public function getMain() {

        return view('app.pharmacy.main');
    }
}
