@extends('plantilla.mina.index')

@section('titulo', 'Ingreso de Tope')

@section('vinculo')
<li class="breadcrumb-item active">Ingreso de Tope</li>
@endsection

@section('content')
{!! Form::open(['route' => 'tope', 'name' => 'forma', 'method' => 'POST']) !!}
    <div class="row justify-content-md-center">
        <div class="col-xxl-3 col-lg-3 col-md-3">
            <div class="card custom-card hrm-main-card danger">
                <div class="card-body">
                    <div class="d-flex align-items-top justify-content-between">
                        <div>
                            <span class="avatar avatar-md avatar-rounded bg-danger">
                                <i class="ti ti-box fs-24"></i>
                            </span>
                        </div>
                        <div class="flex-fill ms-2">
                            
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div>
                                    <p class="text-muted mb-0">Tope Actual</p>
                                    <h4 class="fw-semibold mt-1">{{ number_format($tope->tope, 0, '', '.') }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                {{ Form::label('tope', 'Tope de Informe (Numérico):', ['class' => 'col-md-8']) }}
                <div class="col-md-4">
                    {{ Form::number('tope', isset($tope) ? $tope : "", ['class' => $errors->first('tope') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => 1, 'required', 'autofocus']) }}
                </div>
                @if($errors->has('tope'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('tope') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-2">
            {{ Form::button('<i class="fas fa-search"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-sm btn-info']) }}
        </div>
    </div>
{!! Form::close() !!}
@endsection