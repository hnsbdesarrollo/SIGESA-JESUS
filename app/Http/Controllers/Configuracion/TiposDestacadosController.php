<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;


class TiposDestacadosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos Destacados';
        $page_description = 'Tipos Destacados';

        if (request()->ajax()) {
            $datos = DB::select('EXEC TiposDestacadosSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.TiposDestacados.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('panel_admin.configuracion.TiposDestacados.index', compact('page_title', 'page_description'));
    }
}
