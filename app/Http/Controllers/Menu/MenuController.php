<?php
namespace App\Http\Controllers\Menu;

use DB;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    static function listado_menu(){
        $menuItems = DB::select('EXEC webMenuSeleccionarIdEmpleado ?', array(Auth::user()->IdEmpleado));
        return view('elements.sidebar', ['menuItems' => $menuItems]);
    }

    public function listado_sub_menu(Request $request){
        $data = DB::select('EXEC lista_inquilinos(?)', array($request->id_menu));
        return json_encode($data);
    }
}
