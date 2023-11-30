<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Habitacione
 *
 * @property $id
 * @property $hab_numero
 * @property $hab_estado
 * @property $tipo_hab_id
 * @property $hab_tarifa
 * @property $hab_capacidad
 * @property $imagenes
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Habitacione extends Model
{
    
    static $rules = [
		'hab_numero' => 'required',
		'hab_estado' => 'required',
		'tipo_hab_id' => 'required',
		'hab_tarifa' => 'required',
		'hab_capacidad' => 'required',
		'imagenes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hab_numero','hab_estado','tipo_hab_id','hab_tarifa','hab_capacidad','imagenes'];



}
