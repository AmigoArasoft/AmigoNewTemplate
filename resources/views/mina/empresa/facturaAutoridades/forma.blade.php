@php
    use Carbon\Carbon;    
@endphp
	<div class="row">
        <div class="col-md-2">
            <div class="form-group">
                {{ Form::label('desde', 'Desde:') }}
                {{ Form::date('desde', Carbon::now()->firstOfMonth()->toDateString(), ['class' => $errors->first('desde') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'dataTable()', 'id' => "desdeForm"]) }}
                @if($errors->has('desde'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('desde') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {{ Form::label('hasta', 'Hasta:') }}
                {{ Form::date('hasta', Carbon::now()->toDateString(), ['class' => $errors->first('hasta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'dataTable()', 'id' => "hastaForm"]) }}
                @if($errors->has('hasta'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('hasta') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('operador_id', 'Operador:') }}
                {{ Form::select('operador_id', $operador, null, ['class' => $errors->first('operador_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm selectpicker', 'data-live-search' => 'true', 'onchange' => 'dataTable()', 'title' => 'Seleccionar Operador', 'value' => '', 'multiple' => 'true']) }}
                @if($errors->has('operador_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('operador_id') }}
                      </div>
                @endif
            </div>
        </div>
    </div>