<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:19:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interventie
 * 
 * @property int $automobil_id
 * @property int $id
 * @property \Carbon\Carbon $data_receptie
 * @property int $numar_receptie
 * @property string $lucrari_estimative
 * @property \Carbon\Carbon $data_estimativa
 * @property float $cost_estimativ
 * @property string $observatii
 * @property int $status
 * @property int $vizibilitate
 * @property int $factura_id
 * @property int $client_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Automobil $automobil
 * @property \App\Models\Client $client
 * @property \App\Models\Factura $factura
 * @property \Illuminate\Database\Eloquent\Collection $produs_sau_servicii
 *
 * @package App\Models
 */
class Interventie extends Eloquent
{
	protected $table = 'interventie';

	protected $casts = [
		'automobil_id' => 'int',
		'numar_receptie' => 'int',
		'cost_estimativ' => 'float',
		'status' => 'int',
		'vizibilitate' => 'int',
		'factura_id' => 'int',
		'client_id' => 'int'
	];

	protected $dates = [
		'data_receptie',
		'data_estimativa'
	];

	protected $fillable = [
		'automobil_id',
		'data_receptie',
		'numar_receptie',
		'lucrari_estimative',
		'data_estimativa',
		'cost_estimativ',
		'observatii',
		'status',
		'vizibilitate',
		'factura_id',
		'client_id'
	];

	public function automobil()
	{
		return $this->belongsTo(\App\Models\Automobil::class);
	}

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class);
	}

	public function factura()
	{
		return $this->belongsTo(\App\Models\Factura::class);
	}

	public function produs_sau_servicii()
	{
		return $this->hasMany(\App\Models\ProdusSauServiciu::class);
	}
}
