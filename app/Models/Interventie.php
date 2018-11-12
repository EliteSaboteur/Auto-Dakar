<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interventie extends Model
{
    protected $fillable = [
        'numar', 'marca', 'model','an',
    ];

    public function factura()
    {
        return $this->hasOne('App\Models\Factura');
    }

    public function estimativ()
    {
        return $this->hasMany('App\Models\Estimativ');
    }

    public function automobil()
    {
        return $this->belongsTo('App\Models\Automobil');
    }
}
