<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:12:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Factura
 * 
 * @property int $id
 * @property string $serie_factura
 * @property int $nr_factura
 * @property \Carbon\Carbon $data_eliberare
 * @property int $chitanta_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Chitanta $chitanta
 * @property \Illuminate\Database\Eloquent\Collection $interventies
 *
 * @package App\Models
 */
class Factura extends Eloquent
{
	protected $table = 'factura';

	protected $casts = [
		'nr_factura' => 'int',
		'chitanta_id' => 'int'
	];

	protected $dates = [
		'data_eliberare'
	];

	protected $fillable = [
		'serie_factura',
		'nr_factura',
		'data_eliberare',
		'chitanta_id'
	];

	public function chitanta()
	{
		return $this->belongsTo(\App\Models\Chitanta::class, 'chitanta_id');
	}

	public function interventii()
	{
		return $this->hasMany(\App\Models\Interventie::class);
	}
}
