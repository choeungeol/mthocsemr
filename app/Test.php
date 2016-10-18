<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    protected $fillable = ['name','test_dec'];

    public function testa()
    {
        return $this->hasMany(Testa::class);
    }
}
