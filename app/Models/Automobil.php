<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:08:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Automobil
 * 
 * @property int $id
 * @property string $numar
 * @property string $marca
 * @property string $model
 * @property string $sasiu
 * @property int $an
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $interventii
 *
 * @package App\Models
 */
class Automobil extends Eloquent
{
	protected $table = 'automobil';

	protected $casts = [
		'an' => 'int'
	];

	protected $fillable = [
		'numar',
		'marca',
		'model',
		'sasiu',
		'an'
	];

	public function interventii()
	{
		return $this->hasMany(\App\Models\Interventie::class);
	}
}
