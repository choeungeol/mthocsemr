<?php

namespace App\Http\Controllers;


class BasicBiopsyController extends Controller
{
    public function getMain() {

        return view('app.basicbiopsy.main');
    }
}
