<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class TiposCargoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de Cargo';
        $page_description = 'Tipos de Cargo';

        if (request()->ajax()) {
            $datos = DB::select('EXEC TiposCargoSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposCargo.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('panel_admin.configuracion.TiposCargo.index', compact('page_title', 'page_description'));
    }
}
