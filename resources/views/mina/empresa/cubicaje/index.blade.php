@extends('plantilla.mina.index')

@section('titulo', 'Cubicaje')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Inicio</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
@isset($accion)
	@include('mina.empresa.cubicaje.forma')
@else
    @include('mina.empresa.cubicaje.tabla')
@endisset
@endsection

@section('codigo')
@if(!isset($accion))
	@include('mina.empresa/cubicaje/js')
@else
	@include('mina.empresa/cubicaje/jsUno')
@endif
@endsection