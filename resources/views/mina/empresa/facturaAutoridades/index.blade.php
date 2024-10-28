@extends('plantilla.mina.index')
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

@section('titulo', 'Informes')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Inicio</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
    @include('mina.empresa.facturaAutoridades.forma')
    @include('mina.empresa.facturaAutoridades.tabla')
@endsection

@section('codigo')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    @include('mina.empresa/facturaAutoridades/js')
@endsection