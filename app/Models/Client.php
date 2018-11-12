<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function factura()
    {
        return $this->belongsTo('App\Models\Factura');
    }
}