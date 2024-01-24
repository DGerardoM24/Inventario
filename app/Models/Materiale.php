<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 *
 * @property $id
 * @property $nombre_material
 * @property $desc_material
 * @property $stock
 * @property $marca
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiale extends Model
{
    
    static $rules = [
		'nombre_material' => 'required',
		'desc_material' => 'required',
		'stock' => 'required',
		'marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_material','desc_material','stock','marca'];



}
