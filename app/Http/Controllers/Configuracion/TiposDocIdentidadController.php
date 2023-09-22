<?php
namespace App\Http\Controllers\Configuracion;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TiposDocIdentidad;

class TiposDocIdentidadController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $page_title = 'Tipos de Documento';
        $page_description = 'Tipos de Documento';
        if (request()->ajax()) {
            $data = DB::select('EXEC TiposDocIdentidadFiltrarTodos');
            return datatables()->of($data)
                ->addColumn('action', 'panel_admin.configuracion.TiposDocIdentidad.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('panel_admin.configuracion.TiposDocIdentidad.index', compact('page_title', 'page_description'));
    }

    public function view($id){
        $data = DB::select('EXEC TiposDocIdentidadSeleccionarPorId ?', array($id));
        return json_encode($data);
    }

    public function save(Request $request){
        if ($request->ajax()) {
            //dd($request->IdDocIdentidad);
            if($request->IdDocIdentidad !=null){
                $data =TiposDocIdentidad::updateOrCreate(
                ['IdDocIdentidad' => $request->IdDocIdentidad],
                [
                    'Descripcion'       => ($request->DescripcionTiposDocIdentidad),
                    'DescripcionAbrev'  => ($request->DescripcionAbrevTiposDocIdentidad),
                    'Longitud'          => ($request->LongitudTiposDocIdentidad),
                ]);
            }else{
                $data =TiposDocIdentidad::updateOrCreate(
                [
                    'Descripcion'       => ($request->DescripcionTiposDocIdentidad),
                    'DescripcionAbrev'  => ($request->DescripcionAbrevTiposDocIdentidad),
                    'Longitud'          => ($request->LongitudTiposDocIdentidad),
                ]);
            }
            return json_encode($data);
        }
    }


    public function destroy($id){
        $data = TiposDocIdentidad::find($id);
        $data->delete();
        return json_encode(1);
    }

}

