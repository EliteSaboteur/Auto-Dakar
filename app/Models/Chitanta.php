<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:09:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Chitanta
 * 
 * @property int $id
 * @property int $nr_chitanta
 * @property \Carbon\Carbon $data_eliberare
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $factura
 *
 * @package App\Models
 */
class Chitanta extends Eloquent
{
	protected $casts = [
		'nr_chitanta' => 'int'
	];

	protected $dates = [
		'data_eliberare'
	];

	protected $fillable = [
		'nr_chitanta',
		'data_eliberare'
	];

	public function facturi()
	{
		return $this->hasMany(\App\Models\Factura::class, 'chitanta_id');
	}
}
