@extends('plantilla.mina.index')

@section('titulo', 'Ingreso de Tope')

@section('vinculo')
<li class="breadcrumb-item active">Ingreso de Tope</li>
@endsection

@section('content')
    <div class="card card-info">
        <div class="card-header">@yield('titulo')
            @if(Auth::user()->tercero_id == 1)
                <button type="button" class="btn btn-sm btn-light text-dark" onclick="getOperadores()" data-toggle="modal"  data-target="#modalCreateTope">
                    <i class="fas fa-plus-circle"></i> Crear tope operador
                </button>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th>Acción</th>
                            <th>Operador</th>
                            <th>(Q1-Q2-Q3-Q4)</th>
                            <th>Desde</th>
                            <th>Hasta</th>
                            <th>Total M3</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@include('mina.empresa.tope.modal')

@section('scripts')

    <!-- JSVECTOR MAPS JS -->
    <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- APEX CHARTS JS -->
    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- CHARTJS CHART JS -->
    <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

    <!-- CRM-Dashboard -->
    @vite('resources/assets/js/crm-dashboard.js')
@endsection

@section('codigo')
    @include('mina.empresa/tope/js')
@endsection