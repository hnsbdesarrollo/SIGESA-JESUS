<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class TiposSexoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de Sexo';
        $page_description = 'Tipos de Sexo';
        if (request()->ajax()) {
            $datos = DB::select('EXEC TiposSexoSeleccionarTodos');
            //dd($datos);
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposSexo.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.configuracion.TiposSexo.index', compact('page_title', 'page_description'));
    }
}

