<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use App\Http\Controllers\Controller;

class HisColegioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Colegios';
        $page_description = 'Colegios';

        if (request()->ajax()) {
            $datos = DB::select('EXEC ColegiosHISseleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.HisColegio.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('panel_admin.configuracion.HisColegio.index', compact('page_title', 'page_description'));
    }
}