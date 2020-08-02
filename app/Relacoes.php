<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacoes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dosagem','id_produto','id_cultura','id_praga'
    ];
}
