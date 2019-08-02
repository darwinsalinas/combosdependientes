<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    public function departamentos () {
        return $this->hasMany(Departamento::class);
    }
}
