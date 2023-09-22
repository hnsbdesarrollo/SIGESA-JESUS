<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;
 
 

class TurnosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $page_title = 'Turnos';
        $page_description = 'Turno';
        if (request()->ajax()) {
            //$empleados = TiposDocIdentidad::all();
            $datos = DB::select('EXEC webTurnosSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.Turnos.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.configuracion.Turnos.index', compact('page_title', 'page_description'));
    }
}

