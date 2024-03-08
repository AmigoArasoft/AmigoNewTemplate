<div class="card card-info">
	<div class="card-header">@yield('titulo')
		@if(Auth::user()->tercero_id == 1)
			@can('Viaje crear')
			    <a class="btn btn-sm btn-default text-dark" href="{{ route('viaje.crear') }}">
					<i class="fas fa-plus-circle"></i> Nuevo
				</a>
			@endcan
			<a class="btn btn-sm btn-default text-dark" onclick="getOperadores()">
				<i class="fas fa-truck"></i> Certificar viaje
			</a>
		@endif
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="tabla" class="table table-bordered table-striped table-hover table-sm">
			    <thead>
			        <tr class="text-center">
			        	<th>Viaje</th>
			        	@if(Auth::user()->tercero_id == 1)
				        	@canany(['Viaje editar', 'Viaje borrar'])
				        	    <th width="180px">Acción</th>
				        	@endcanany
				        @endif
			            <th>Nro Vale</th>
			            <th>Fecha</th>
			            <th>Operador</th>
			            <th>Vehículo</th>
			            <th>Material</th>
			            <th>Volúmen</th>
			            <th>Volúmen cambiado</th>
			            <th>Digitador</th>
			            <th>Activo</th>
			            <th>Certificado</th>
			        </tr>
			    </thead>
			</table>
		</div>
	</div>
</div>