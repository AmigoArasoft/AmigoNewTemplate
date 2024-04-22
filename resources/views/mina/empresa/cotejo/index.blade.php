@extends('plantilla.mina.index')

@section('titulo', 'Cotejo')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Inicio</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Cotejo</h3>
        </div>
        <form action="{{ route('cotejo.excel') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-4">
                            {{ Form::label('informe', 'Informe') }}
                            <select name="informe" id="informe" class="form-control form-control-sm">
                                @foreach ($informes as $informe)
                                    <option value="{{ $informe->id }}">Factura: {{ $informe->id }} | {{ $informe->tercero->nombre }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('informe'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('informe') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            {{ Form::label('file', 'Archivo Excel') }}
                            <br>
                            <input type="file" name="file" class="form-control form-control-sm" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                            @if($errors->has('file'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('file') }}
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                {{ Form::button('<i class="fas fa-save"></i> Crear cotejo', ['type' => 'submit', 'class' => 'btn btn-success']) }}
            </div>
        </form>

    </div>
@endsection

@section('codigo')
@if(!isset($accion))
	@include('mina.acceso/permiso/js')
@endif
@endsection