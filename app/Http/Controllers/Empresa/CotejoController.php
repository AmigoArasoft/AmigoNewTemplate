<?php

namespace App\Http\Controllers\Empresa;

use App\Exports\CotejoExport;
use Carbon\Carbon;

use App\Models\Factura;
use Illuminate\Http\Request;
use App\Imports\CotejoImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Viaje;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;


class CotejoController extends Controller{
    public function __construct(){
        $this->middleware(['permission:Cotejo']);
    }

    public function index(Request $request){
        $informes = Factura::with('tercero')->orderBy('id', 'desc')->get();

        return view('mina.empresa.cotejo.index', compact('informes'));
    }

    public function excel(Request $request){
        $messages = [
            'file.file' => 'Debe cargar un archivo en formato .xlsx o .xls',
            'informe.required' => 'Informe es requerido'
        ];
        $validator = Validator::make($request->all(), [
            'file' => 'file',
            'informe' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect('cotejo')->with('error', $validator->messages());
        }
        
        $file = $request->file('file');

        $excel_arr = Excel::toArray(new CotejoImport(), $file);

        try {
            //Se convierte el excel en un array legible

            $informe = Factura::where('id', $request->informe)->first();
            
            $errores = [];
            $viajesAmigoExistentes = [];

            foreach ($excel_arr[0] as $value) {
                if (!array_key_exists('nro_vale', $value) || !array_key_exists('placa', $value) || !array_key_exists('cantidad_m3', $value) || !array_key_exists('material', $value)) {
                    return redirect()->route('cotejo')->with('error', "Estructura de archivo AMIGO no coincide, orden: NRO_VALE, PLACA, M3, MATERIAL");
                }
                
                if (count($value) < 4) {
                    return redirect()->route('cotejo')->with('error', 'Estructura de archivo AMIGO no coincide debe existir mayor a 4 columnas');
                }
                
                $viaje = Viaje::where(['nro_viaje' => $value['nro_vale'], 'activo' => 1, 'factura_id' => $informe->id])->first();
                
                if($viaje){
                    if($viaje->operador_id != $informe->tercero_id){
                        $errores[] = [
                            'viaje' => "Viaje ". $value['nro_vale'],
                            'descripcion' => 'OPERADOR no coincide con el seleccionado del informe AMIGO'
                        ];
                    }

                    if($viaje->volumen != $value['cantidad_m3']){
                        $errores[] = [
                            'viaje' => "Viaje ". $value['nro_vale'],
                            'descripcion' => "(VOLUMEN EXCEL: ". $value['cantidad_m3'] .") no coincide con el informe AMIGO (VOLUMEN AMIGO: $viaje->volumen)"
                        ];
                    }

                    if($viaje->vehiculo->placa != $value['placa']){
                        $errores[] = [
                            'viaje' => "Viaje ". $value['nro_vale'],
                            'descripcion' => "(PATENTE EXCEL: ". $value['placa'] .") no coincide con el informe AMIGO (PATENTE AMIGO: ". $viaje->vehiculo->placa .")"
                        ];
                    }

                    if($viaje->material->nombre != $value['material']){
                        $errores[] = [
                            'viaje' => "Viaje ". $value['nro_vale'],
                            'descripcion' => "(MATERIAL EXCEL: ". $value['material'] .") no coincide con el informe AMIGO (MATERIAL AMIGO: ". $viaje->material->nombre .")"
                        ];
                    }

                    $viajesAmigoExistentes[] = $viaje->id;
                }else{
                    $errores[] = [
                        'viaje' => "Viaje ". $value['nro_vale'],
                        'descripcion' => 'No existe en el informe de viajes activos de AMIGO'
                    ];
                }
            }

            $viajes = Viaje::where(['factura_id' => $informe->id])->whereNotIn('id', $viajesAmigoExistentes)->get();

            foreach ($viajes as $value) {
                $errores[] = [
                    'viaje' => "Viaje ". $value['nro_viaje'],
                    'descripcion' => 'Existe en AMIGO pero no en EXCEL'
                ];
            }

            return Excel::download(new CotejoExport($errores, $request->informe), 'Cotejo_Informe_'.$request->informe.'.xlsx');

            return redirect()->route('cotejo')->with('info', "Cotejo creado correctamente");
        } catch (\Exception $e) {
            return redirect()->route('cotejo')->with('error', "Ha ocurrido un error");
        }
    }

}