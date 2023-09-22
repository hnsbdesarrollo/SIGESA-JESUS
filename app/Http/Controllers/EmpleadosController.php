<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\User;

class EmpleadosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function get_empleados(){
        $empleados = Empleados::all();
        return json_encode($empleados);
    }

    public function listar_empleados(){
        $page_title = 'Empleados';
        $page_description = 'Listado de Empleados';
        if (request()->ajax()) {
            $datos = DB::select('EXEC EmpleadosSeleccionarTodos_web');
            return datatables()->of($datos)
                ->addColumn('action', 'panel_admin.empleados.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.empleados.index', compact('page_title', 'page_description'));
    }

    public function empleado_restablecer_password(Request $request){
        $empleado = Empleados::where("IdEmpleado", '=', $request->IdEmpleado)->first();
        $user = User::where("IdEmpleado", '=', $request->IdEmpleado)->first();
        if ($user) {
            $user->name =  strtoupper($empleado->ApellidoPaterno . ' ' . $empleado->ApellidoMaterno . ' ' . $empleado->Nombres);
            $user->password =  bcrypt($request->DNI);
            $user->IdEmpleado =  $request->IdEmpleado;
            $user->save();
        } else {
            $new_user = new User([
                'name' => strtoupper($empleado->ApellidoPaterno . ' ' . $empleado->ApellidoMaterno . ' ' . $empleado->Nombres),
                'email' => $empleado->Usuario,
                'IdEmpleado' => $request->IdEmpleado,
                'password' => bcrypt($request->DNI)
            ]);
            $new_user->save();
        }
        return json_encode($empleado);
    }
}
