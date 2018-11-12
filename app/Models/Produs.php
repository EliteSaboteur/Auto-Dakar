<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    public function factura()
    {
        return $this->belongsTo('App\Models\Produs');
    }
}
