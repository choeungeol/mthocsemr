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

    public function mth_basic_biopsys()
    {
        return $this->hasMany(MthBasicBiopsy::class);
    }

    public function mth_prescribes()
    {
        return $this->hasMany(MthPrescribe::class);
    }

    public function mth_disease()
    {
        return $this->hasMany(MthDisease::class);
    }

}
