<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthChart extends Model
{

    protected $fillable = [
        'patient_id',
        'fregi',
        'vhdetail',
        'pregnant',
        'ereception',
        'hr',
        'uniques',
        'vhreason',
        'receivable',
        'xray',
        'bbflag',
        'hcflag',
        'oflag',
        'pflag',
        'memo',
        'elhospital',
        'hcselect',
        'gohyupjin',
    ];

    public function mth_patients()
    {
        return $this->hasOne(MthPatient::class);
    }

}
