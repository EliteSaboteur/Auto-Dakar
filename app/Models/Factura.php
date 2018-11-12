<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public function produs()
    {
        return $this->hasMany('App\Models\Produs');
    }

    public function interventie()
    {
        return $this->belongsTo('App\Models\Interventie');
    }
}
