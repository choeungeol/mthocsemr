<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthChart extends Model
{
    public function mth_patients()
    {
        return $this->hasOne(MthPatient::class);
    }

}
