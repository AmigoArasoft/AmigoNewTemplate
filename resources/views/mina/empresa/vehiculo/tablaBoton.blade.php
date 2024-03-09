<div class="hstack gap-2 fs-15">
	@can('Vehiculo editar')
		<a class="btn btn-sm btn-info" href="{{ route('vehiculo.editar', $id) }}"><i class="fas fa-edit"></i> Editar</a>
	@endcan
	@can('Vehiculo borrar')
		@if($activo==1)
			<a class="btn btn-sm btn-danger" href="{{ route('vehiculo.activar', $id) }}"><i class="fas fa-times-circle"></i> Inactivar</a>
		@else
			<a class="btn btn-sm btn-info" href="{{ route('vehiculo.activar', $id) }}"><i class="fas fa-check-circle"></i> Activar</a>
		@endif
	@endcan
</div>