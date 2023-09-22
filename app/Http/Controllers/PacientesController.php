<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;

class PacientesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function listar_pacientes(){
        $page_title = 'pacientes';
        $page_description = 'Listado de pacientes';
        if (request()->ajax()) {
            $pacientes = pacientes::all();
            return datatables()->of($pacientes)
                ->addColumn('action', 'panel_admin.pacientes.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.pacientes.index', compact('page_title', 'page_description'));
    }


}
