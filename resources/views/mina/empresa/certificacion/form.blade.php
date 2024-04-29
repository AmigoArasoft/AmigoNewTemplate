<div class="card-body">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('nombre', 'Nombre:') }}
                {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre del certificado', 'maxlength' => '150', 'required', 'autofocus']) }}
                @if($errors->has('nombre'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('nombre') }}
                      </div>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('fecha_certificacion', 'Fecha certificación:') }}
                {{ Form::date('fecha_certificacion', null, ['class' => $errors->first('fecha_certificacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Fecha de Certificación', 'maxlength' => '150', 'required', 'autofocus']) }}
                @if($errors->has('fecha_certificacion'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('fecha_certificacion') }}
                      </div>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('operador_id', 'Operador:') }}
			    {{ Form::select('operador_id', $operadores, null, ['class' => $errors->first('operador_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm selectpicker', 'data-live-search' => 'true', 'title' => "Operador (opcional)"]) }}
                @if($errors->has('operador_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('operador_id') }}
                      </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('certificacion_archivo', 'Certificado:') }}
                {{ Form::file('certificacion_archivo') }}
                @if($errors->has('certificacion_archivo'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('certificacion_archivo') }}
                      </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    @if($accion == 'Nuevo')
        @can('Certificacion crear')
            {{ Form::button('<i class="fas fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-info']) }}
        @endcan
    @elseif($accion == 'Editar')
        @can('Certificacion editar')
            {{ Form::button('<i class="fas fa-edit"></i> Modificar', ['type' => 'submit', 'class' => 'btn btn-info']) }}
        @endcan
    @endif
    <a class="btn btn-info ml-2" href="{{ route('certificacion') }}"><i class="fas fa-undo"></i> Regresar</a>
</div>