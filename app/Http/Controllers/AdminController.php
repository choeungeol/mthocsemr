<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function getMain() {

        return view('app.admin.main');
    }
}
