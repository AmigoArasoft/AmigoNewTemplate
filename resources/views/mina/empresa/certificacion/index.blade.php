@extends('plantilla.mina.index')

@section('titulo', 'Certificaciones')

@section('vinculo')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Inicio</a></li>
<li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('content')
	<div class="card card-info">
		<div class="card-header">@yield('titulo') 
			@can('Certificacion crear')
				<a class="btn btn-sm btn-light text-dark" href="{{ route('certificacion.crear') }}">
					<i class="fas fa-plus-circle"></i> Nuevo
				</a>
			@endcan
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="tabla" class="table table-bordered table-striped table-hover table-sm">
					<thead>
						<tr class="text-center">
							@canany(['Certificacion editar', 'Certificacion borrar'])
								<th width="200px">Acción</th>
							@endcanany
							<th>Nombre</th>
							<th>Fecha de certificación</th>
							<th>Operador</th>
							<th>Activo</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('codigo')
	@include('mina/empresa/certificacion/js')
@endsection