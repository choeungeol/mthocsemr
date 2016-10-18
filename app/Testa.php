<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testa extends Model
{

    protected $fillable = ['test_id','name','test_dec'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
