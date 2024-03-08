@can('Viaje editar')
	<a class="btn btn-sm btn-info" href="{{ route('viaje.editar', $id) }}"><i class="fas fa-edit"></i> Editar</a>
@endcan
@can('Viaje borrar')
	@if($activo==1)
		<a class="btn btn-sm btn-danger" href="{{ route('viaje.activar', $id) }}"><i class="fas fa-times-circle"></i> Inactivar</a>
	@else
		<a class="btn btn-sm btn-info" href="{{ route('viaje.activar', $id) }}"><i class="fas fa-check-circle"></i> Activar</a>
	@endif
@endcan
@can('Viaje editar')
	<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="changeId({{ $id }}, 'origen')">
		<i class="fas fa-envelope"></i> Certificado origen
	</button>
	<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal" onclick="changeId({{ $id }}, 'vale')">
		<i class="fas fa-file"></i> Vale
	</button>
@endcan