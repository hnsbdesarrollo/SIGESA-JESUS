<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model{
    public $timestamps = false;
    protected $table = "Roles";

    protected $fillable = [
        'IdRol',
        'Nombre'
    ];

    public function getKeyName(){
        return "IdRol";
    }
}
