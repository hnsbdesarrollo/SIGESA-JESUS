<?php
namespace App\Models\Configuracion;
use Illuminate\Database\Eloquent\Model;

class TiposCargo extends Model{
    public $timestamps = false;
    protected $table = "TiposCargo";

    protected $fillable = [
        'idTipoCargo',
        'Cargo',
    ];

    public function getKeyName(){
        return "idTipoCargo";
    }
}
