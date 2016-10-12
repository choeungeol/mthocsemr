<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthBasicBiopsy extends Model
{

    protected $fillable = [
        'chart_id',
        'maxbp',
        'minbp',
        'pb',
        'brate',
        'weight',
        'temp',
        'height',
        'diabetes',
    ];

    public function mth_charts()
    {
        return $this->belongsTo(MthChart::class);
    }
}
