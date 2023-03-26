<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cerveza
 *
 * @property $id
 * @property $nombre
 * @property $marca
 * @property $precio
 * @property $grados
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cerveza extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'marca' => 'required',
		'precio' => 'required',
		'grados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','marca','precio','grados'];



}
