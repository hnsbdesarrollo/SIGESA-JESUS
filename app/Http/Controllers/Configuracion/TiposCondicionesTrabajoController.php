<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class TiposCondicionesTrabajoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de Condiciones';
        $page_description = 'Tipos de Condiciones';

        if (request()->ajax()) {
            $datos = DB::select('EXEC TiposCondicionTrabajoSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposCondicionesTrabajo.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }


        return view('panel_admin.configuracion.TiposCondicionesTrabajo.index', compact('page_title', 'page_description'));
    }
}
