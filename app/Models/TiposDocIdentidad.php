<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TiposDocIdentidad extends Model{
    public $timestamps = false;
    protected $table = "TiposDocIdentidad";

    protected $fillable = [
        'IdDocIdentidad',
        'Descripcion',
        'DescripcionAbrev',
        'Longitud'
    ];

    public function getKeyName(){
        return "IdDocIdentidad";
    }
}
