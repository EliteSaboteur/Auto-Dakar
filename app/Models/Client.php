<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Dec 2018 14:13:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $denumire
 * @property string $telefon
 * @property string $cnp/cui
 * @property string $regcom
 * @property string $seria
 * @property string $numar
 * @property string $eliberat_de
 * @property string $reprezentant
 * @property string $adresa
 * @property string $judet
 * @property string $cont
 * @property string $banca
 * @property string $email
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $interventii
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $table = 'client';

	protected $fillable = [
		'denumire',
		'telefon',
		'cnp/cui',
		'email',
		'meta'
	];

	public function interventii()
	{
		return $this->hasMany(\App\Models\Interventie::class);
	}
}
