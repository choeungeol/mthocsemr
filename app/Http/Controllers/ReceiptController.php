<?php

namespace App\Http\Controllers;

use App\MthPatient;

class ReceiptController extends Controller
{
    public function getMain()
    {
        $patients = MthPatient::paginate(10);
        return view('app.receipt.main')->with('patients',$patients);
    }

}
