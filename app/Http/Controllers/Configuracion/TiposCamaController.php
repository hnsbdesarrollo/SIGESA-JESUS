<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class TiposCamaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de Cama';
        $page_description = 'Tipos de Cama';

        if (request()->ajax()) {
            $datos = DB::select('EXEC TiposCamaSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposCama.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('panel_admin.configuracion.TiposCama.index', compact('page_title', 'page_description'));
    }
}
