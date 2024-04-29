@extends('plantilla.mina.index')

@section('titulo', 'Certificaciones')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Crear certificaciones</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Nueva certificacion</h3>
        </div>
        {!! Form::open(['route' => 'certificacion.crear', 'name' => 'forma', 'files' => true]) !!}
            @include('mina.empresa.certificacion.form', ['accion' => 'Nuevo', 'operadores' => $operadores])
        {!! Form::close() !!}
    </div>
@endsection
