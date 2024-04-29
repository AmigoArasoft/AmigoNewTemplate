<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Certificacion;
use App\Models\Tercero;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CertificacionController extends Controller{
    public function __construct(){
        $this->middleware(['permission:Certificacion leer|Certificacion crear|Certificacion editar|Certificacion borrar']);
        $this->middleware('mina');
    }

    public function index(Request $request){
        return view('mina.empresa.certificacion.index');
    }

    public function list(Request $request){
        if (!$request->ajax()) return redirect('/');
        return datatables()
        ->eloquent(Certificacion::select('certificaciones.id', 'certificaciones.nombre', 'certificaciones.fecha_certificacion', 'terceros.nombre as operador', 'certificaciones.archivo', 'certificaciones.activo')
        ->leftJoin('terceros', 'terceros.id', '=', 'certificaciones.operador_id'))
        ->addColumn('botones', 'mina/empresa/certificacion/tablaBoton')
        ->addColumn('activo', 'mina/empresa/certificacion/tablaActivo')
        ->rawColumns(['botones', 'activo'])
        ->toJson();
    }

    public function create(){
        $operadores = Tercero::where('operador', 1)->whereNotNull('frente_id')->where('activo', 1)->orderBy('nombre')->get()->pluck('nombre', 'id');

        return view('mina.empresa.certificacion.create', compact('operadores'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $request->merge(['archivo' => Storage::putFile('public/certificacion', $request->file('certificacion_archivo'))]);
        Certificacion::create($request->all());
        return redirect()->route('certificacion')->with('info', 'Registro creado con éxito');
    }

    public function edit($id){
        $operadores = Tercero::where('operador', 1)->whereNotNull('frente_id')->where('activo', 1)->orderBy('nombre')->get()->pluck('nombre', 'id');
        $dato = Certificacion::findOrFail($id);
        return view('mina.empresa.certificacion.edit', compact('dato', 'operadores'));
    }

    public function update(Request $request, $id){
        $this->validatorUpdate($request->all(), $id)->validate();
        $dato = Certificacion::findOrFail($id);
        if($request->file('certificacion_archivo')){
            Storage::delete($dato->archivo);
            $request->merge(['archivo' => Storage::putFile('public/certificacion', $request->file('certificacion_archivo'))]);
        }
        $dato->fill($request->all())->save();
        return redirect()->route('certificacion')->with('info', 'Registro actualizado con éxito');
    }

    public function descargar(Request $request, $archivo){
        // Validar el archivo
        if (!Storage::exists('public/certificacion/' . $archivo)) {
            return back()->with('error', 'Certificación no encontrada');
        }

        // Obtener el nombre del archivo original
        $nombreOriginal = basename($archivo);

        // Devolver el archivo como descarga
        return response()->download(storage_path('app/public/certificacion/' . $archivo), $nombreOriginal);
    }

    public function destroy($id){
        $dato = Certificacion::findOrFail($id);
        $dato->activo = ($dato->activo == 1) ? 0 : 1;
        $dato->save();
        return redirect()->route('certificacion')->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'nombre' => 'required|string|max:150',
            'fecha_certificacion' => 'required|date|max:255',
            'certificacion_archivo' => 'required|file',
            'operador_id' => 'nullable|exists:terceros,id'
        ]);
    }

    protected function validatorUpdate(array $data, $id){
        return Validator::make($data, [
            'nombre' => 'required|string|max:150',
            'fecha_certificacion' => 'required|date|max:255',
            'operador_id' => 'nullable|exists:terceros,id'
        ]);
    }
}