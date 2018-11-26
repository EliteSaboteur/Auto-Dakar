<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estimativ extends Model
{
    public function interventie()
    {
        return $this->belongsTo('App\Models\Interventie');
    }
}
