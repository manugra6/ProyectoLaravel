<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escuderia
 *
 * @property $id
 * @property $nombre
 * @property $nacionalidad
 * @property $motor
 * @property $logo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escuderia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'nacionalidad' => 'required',
		'motor' => 'required',
		'logo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nacionalidad','motor','logo'];



}
