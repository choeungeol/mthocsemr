<?php

namespace App\Http\Controllers;

use App\MthChart;
use App\MthPatient;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{

    public function index()
    {

        $patients = MthPatient::all();
        return view('app.receipt.main')->with('patients',$patients);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $patients = new MthPatient([
            'name' => $request->get('name'),
            'id_num' => $request->get('id_num'),
            'birthday' => $request->get('birthday'),
            'chk_solar' => false,
            'buss_num' => $request->get('buss_num'),
            'buss_nam' => $request->get('buss_nam'),
            'phone' => $request->get('phone'),
            'cellphone' => $request->get('cellphone'),
            'email' => $request->get('email'),
            'dis_id' => $request->get('dis_id'),
            'info_agg' => $request->get('info_agg'),
            'foreigner' => $request->get('foreigner'),
            'married' => $request->get('married'),
            'chk_list' => false,
            'chk_pager' => false,
            'chk_email' => false,
            'postal_code' => $request->get('postal_code'),
            'addr' => $request->get('addr'),
            'addr_detail' => $request->get('addr_detail'),
            'vet_id' => $request->get('vet_id'),
            'vet_num' => $request->get('vet_num'),
            'memo' => $request->get('memo'),
        ]);

        $patients->save();

        $lastpatients = MthPatient::orderBy('id', 'desc')->first();

        $charts = new MthChart([
            'patient_id' => $lastpatients->id,
            'fregi' => $request->get('fregi'),
            'vhdetail' => $request->get('vhreason'),
            'pregnant' => $request->get('pregnant'),
            'ereception' => false,
            'hr' => false,
            'uniques' => '',
            'vhreason' => $request->get('vhreason'),
            'receivable' => '',
            'xray' => false,
            'bbflag' => false,
            'hcflag' => false,
            'oflag' => false,
            'pflag' => false,
            'memo' => $request->get('memo'),
            'elhospital' => false,
            'hcselect' => $request->get('hcselect'),
            'gohyupjin' => $request->get('gohyupjin'),
        ]);

        $charts->save();

        return redirect('/receipt')->with('message', '0님이 등록되었습니다.');
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
