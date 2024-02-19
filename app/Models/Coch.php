<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coch
 *
 * @property $id
 * @property $piloto1
 * @property $piloto2
 * @property $piloto3
 * @property $numero_coche
 * @property $n_escuderia
 * @property $imagen_coche
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coch extends Model
{
    
    static $rules = [
		'piloto1' => 'required',
		'piloto2' => 'required',
		'piloto3' => 'required',
		'numero_coche' => 'required',
		'n_escuderia' => 'required',
		'imagen_coche' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piloto1','piloto2','piloto3','numero_coche','n_escuderia','imagen_coche'];



}
