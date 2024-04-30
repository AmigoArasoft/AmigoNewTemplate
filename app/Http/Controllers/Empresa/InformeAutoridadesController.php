<?php

namespace App\Http\Controllers\Empresa;

use Carbon\Carbon;
use App\Models\Tope;

use App\Models\Viaje;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Exports\FacturaExport;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use App\Models\Tercero;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class InformeAutoridadesController extends Controller{
    public function __construct(){
        $this->middleware(['permission:Factura leer|Factura crear|Factura editar|Factura borrar']);
    }

    public function index(Request $request){
        $operador = Tercero::where('operador', 1)->whereNotNull('frente_id')->where('activo', 1)->orderBy('nombre')->get()->pluck('nombre', 'id');

        return view('mina.empresa.facturaAutoridades.index', compact('operador'));
    }

    public function list(Request $request){
        if (!$request->ajax()) return redirect('/');
        return datatables()
        ->eloquent(Viaje::select('viajes.nro_viaje', 'viajes.id', 'viajes.fecha_nombre as fecha', 'terceros.nombre as operador', 'vehiculos.placa', 'materias.nombre', 'viajes.volumen', 'users.name as digitador', 'viajes.activo', 'viajes.volumen_manual', 'viajes.certificado', 'viajes.fecha_certificacion', 'viajes.numero_certificacion')
            ->where('eliminado', 0)
            ->whereBetween('viajes.fecha', [$request->desde, $request->hasta])
            ->whereIn('viajes.operador_id', $request->operador_id)
            ->join('terceros', 'viajes.operador_id', '=', 'terceros.id')
            ->join('vehiculos', 'viajes.vehiculo_id', '=', 'vehiculos.id')
            ->join('materias', 'viajes.material_id', '=', 'materias.id')
            ->join('users', 'viajes.user_update_id', '=', 'users.id')
            ->orderBy('viajes.fecha', 'desc'))
        ->addColumn('volumen', 'mina/empresa/facturaAutoridades/tablaBotonVolumen')
        ->addColumn('activo', 'mina/empresa/viaje/tablaActivo')
        ->addColumn('certificado', 'mina/empresa/viaje/tablaCertificado')
        ->rawColumns(['volumen', 'activo', 'certificado'])
        ->toJson();
    }

    public function store(Request $request){

        $dato = Tope::create([
            'operador_id' => $request->operador_id,
            'desde' => $request->desde,
            'hasta' => $request->hasta,
            'trimestre' => $request->trimestre,
            'tope' => $request->tope
        ]);

        return redirect()->route('tope')->with('info', 'Tope creado con éxito');
    }

    public function tope(Request $request){
        if(isset($request->tope)){
            $dato = Tope::get()->count();
            if($dato <= 0){
                Tope::create([
                    'tope' => $request->tope
                ]);
            }else{
                Tope::where('id', 1)->update([
                    'tope' => $request->tope
                ]);
            }

            return redirect()->route('tope')->with('info', 'Tope actualizado correctamente');
        }

        $tope = Tope::first();
        $operador = Tercero::where('operador', 1)->whereNotNull('frente_id')->where('activo', 1)->orderBy('nombre')->get()->pluck('nombre', 'id');
        return view('mina.tope', compact('tope'));
    }

    public function listTope(Request $request){
        return datatables()
        ->eloquent(
            Tope::select('tope.id', 'terceros.nombre as operador', 'tope.desde', 'tope.hasta', 'tope.trimestre', 'tope.tope')
            ->join('terceros', 'tope.operador_id', '=', 'terceros.id')
            ->when(!empty($request->get('desde')) && !empty($request->get('hasta')) && !empty($request->get('operador_id')), function ($q) use ($request) {
                return $q->whereIn('terceros.id', $request->get('operador_id'))
                ->where('tope.desde', $request->get('desde'))
                ->where('hasta', $request->get('hasta'));
            })
        )
        ->addColumn('botones', 'mina/empresa/tope/tablaBoton')
        ->rawColumns(['botones'])
        ->toJson();
    }

    public function destroy($id){
        //Eliminamos la tope
        Tope::findOrFail($id)->delete();
        return redirect()->route('tope')->with('info', 'Tope eliminado con éxito');
    }
}