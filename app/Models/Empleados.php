<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    public $timestamps = false;
    protected $table = "Empleados";

    protected $fillable = [
        'IdEmpleado',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Nombres',
        'DNI',
        'Usuario',
        'ClaveWeb',
    ];

    public function getKeyName(){
        return "IdEmpleado";
    }
}
