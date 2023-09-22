<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Roles;

class RolesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Roles';
        $page_description = 'Roles';

        if (request()->ajax()) {
            $datos = DB::select('EXEC RolesSeleccionarTodos');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.configuracion.Roles.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('panel_admin.configuracion.Roles.index', compact('page_title', 'page_description'));
    }

    public function view($id){
        //dd($id);
        $data = DB::select('EXEC RolesSeleccionarPorId ?', array($id));
        return json_encode($data);
    }

    public function save(Request $request){
        if ($request->ajax()) {
            //dd($request->IdRol);
            if($request->IdRol !=null){
                $data =Roles::updateOrCreate(
                ['IdRol' => $request->IdRol],
                [
                    'Nombre'       => ($request->Nombre),
                ]);
            }else{
                $data =Roles::updateOrCreate(
                [
                    'Nombre'       => ($request->Nombre),
                ]);
            }
            return json_encode($data);
        }
    }


    public function destroy($id){
        //dd($id);
        $data = Roles::find($id);
        $data->delete();
        return json_encode(1);
    }
}