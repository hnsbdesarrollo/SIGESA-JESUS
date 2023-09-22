<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposEmpleado extends Model
{
    public $timestamps = false;
    protected $table = "TiposEmpleado";

    protected $fillable = [
        'IdTipoEmpleado',
        'Descripcion'
    ];

    public function getKeyName(){
        return "IdTipoEmpleado";
    }
}
