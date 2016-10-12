<?php

namespace App\Http\Controllers;


use App\MthBasicBiopsy;
use App\MthChart;
use App\MthPatient;
use Illuminate\Http\Request;


class BasicBiopsyController extends Controller
{
    public function index()
    {

        $noflag = MthPatient::join('mth_charts', 'mth_charts.patient_id', '=', 'mth_patients.id')
            ->where('bbflag', false)->get();

            return view('app.basicbiopsy.main')->with('noflag',$noflag);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $cno = $request->get('chart_id');
        $bbi = new MthBasicBiopsy([
            'chart_id' => $request->get('chart_id'),
            'minbp' => $request->get('minbp'),
            'maxbp' => $request->get('maxbp'),
            'pb' => $request->get('pb'),
            'weight' => $request->get('weight'),
            'temp' => $request->get('temp'),
            'brate' => $request->get('brate'),
            'diabetes' => $request->get('diabetes'),
            'height' => $request->get('height'),
        ]);

        $bbi->save();

        $chart = MthChart::findOrFail($cno);
        $chart->update([
            'bbflag' => true,
        ]);

        return redirect('/basicbiopsy')->with('message', '등록되었습니다.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
