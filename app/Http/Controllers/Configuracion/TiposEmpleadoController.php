<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class TiposEmpleadoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de empleados';
        $page_description = 'Tipos de empleados';
        if (request()->ajax()) {
            //$empleados = TiposDocIdentidad::all();
            $datos = DB::select('EXEC TiposEmpleadoSeleccionarTodos');
            //dd($datos);
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposEmpleado.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.configuracion.TiposEmpleado.index', compact('page_title', 'page_description'));
    }
}

