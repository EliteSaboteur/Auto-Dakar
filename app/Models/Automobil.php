<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automobil extends Model
{
    protected $fillable = [
        'numar', 'marca', 'model','an',
    ];

    public function interventie()
    {
        return $this->hasMany('App\Models\Interventie');
    }
}
