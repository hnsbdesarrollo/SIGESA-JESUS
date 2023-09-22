<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposDestacados extends Model
{
    public $timestamps = false;
    protected $table = "TiposDestacados";

    protected $fillable = [
        'idDestacado',
        'Destacado'
    ];

    public function getKeyName(){
        return "idDestacado";
    }
}
