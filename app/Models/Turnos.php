<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    public $timestamps = false;
    protected $table = "Turnos";

    protected $fillable = [
        'IdTurno',
        'Codigo',
        'Descripcion',
        'HoraInicio',
        'HoraFin',
        'IdTipoServicio',
        'IdEspecialidad',
        'IdTipoTurnoRef',
        'estado'
    ];

    public function getKeyName(){
        return "IdTurno";
    }
}
