<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:20:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdusSauServiciu
 * 
 * @property int $interventie_id
 * @property int $id
 * @property string $tip
 * @property string $denumire
 * @property int $cantitate/tarif
 * @property float $pret/ore
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Interventie $interventie
 *
 * @package App\Models
 */
class ProdusSauServiciu extends Eloquent
{
	protected $table = 'produs_sau_serviciu';

	protected $casts = [
		'interventie_id' => 'int',
		'cantitate/tarif' => 'int',
		'pret/ore' => 'float'
	];

	protected $fillable = [
		'interventie_id',
		'tip',
		'denumire',
		'cantitate/tarif',
		'pret/ore'
	];

	public function interventie()
	{
		return $this->belongsTo(\App\Models\Interventie::class);
	}
}
