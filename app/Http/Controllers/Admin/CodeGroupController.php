<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CodeGroupController extends Controller
{
    public function create(Requests\CodeGroupCreateRequest $request)
    {
        return redirect()->back(); //임시사용
    }

    public function update(Requests\CodeGroupUpdateReqest $request)
    {
        return redirect()->back(); //임시사용
    }
}
