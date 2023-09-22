<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposCondicionesTrabajo extends Model
{
    public $timestamps = false;
    protected $table = "TiposCondicionTrabajo";

    protected $fillable = [
        'IdCondicionTrabajo',
        'Descripcion',
        'IdCondicionHisMinsa'
    ];

    public function getKeyName(){
        return "IdCondicionTrabajo";
    }
}
