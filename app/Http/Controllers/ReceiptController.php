<?php

namespace App\Http\Controllers;

class ReceiptController extends Controller
{
    public function getMain() {

        return view('app.receipt.main');
    }
}
