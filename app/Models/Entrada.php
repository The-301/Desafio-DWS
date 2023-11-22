<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrada
 *
 * @property $id
 * @property $tipo_entrada
 * @property $monto_salida
 * @property $fecha
 * @property $factura
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrada extends Model
{
    
    static $rules = [
		'tipo_entrada' => 'required',
		'monto_salida' => 'required',
		'fecha' => 'required',
		'factura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_entrada','monto_salida','fecha','factura'];



}
