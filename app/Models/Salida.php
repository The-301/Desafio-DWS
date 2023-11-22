<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salida
 *
 * @property $id
 * @property $tipo_salida
 * @property $monto_salida
 * @property $fecha_salida
 * @property $factura_salida
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Salida extends Model
{
    
    static $rules = [
		'tipo_salida' => 'required',
		'monto_salida' => 'required',
		'fecha_salida' => 'required',
		'factura_salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_salida','monto_salida','fecha_salida','factura_salida'];



}
