<?php

namespace App\Models\Menu;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Menu extends Model
{

	static function listado_menu(){
        $menuItems = DB::select('EXEC web_MenuPermisosIdempleado ?', array(Auth::user()->IdEmpleado));
        return $menuItems;
    }
}
