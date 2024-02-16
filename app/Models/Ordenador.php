<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordenador
 *
 * @property $id
 * @property $marcas_id
 * @property $tipos_id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordenador extends Model
{
    protected $table = 'ordenadores';
    
    static $rules = [
        'marcas_id' => 'required',
        'tipos_id' => 'required',
        'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marcas_id', 'tipos_id', 'nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marcas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipos_id');
    }
}
