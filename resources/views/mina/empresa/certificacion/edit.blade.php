@extends('plantilla.mina.index')

@section('titulo', 'Certificaciones')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Editar certificaciones</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Editar certificacion</h3>
        </div>
        {!! Form::model($dato, ['route' => ['certificacion.editar', $dato->id], 'method' => 'PUT', 'name' => 'forma', 'files' => true]) !!}
            @include('mina.empresa.certificacion.form', ['accion' => 'Editar', 'operadores' => $operadores])
        {!! Form::close() !!}
    </div>
@endsection