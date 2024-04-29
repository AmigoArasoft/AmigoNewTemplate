<div class="hstack gap-2 fs-15">
	<a class="btn btn-sm btn-info" href="{{ route('storage.certificacion.download', substr($archivo, 21)) }}" target="blank"><i class="fas fa-download"></i> Descargar</a>
	@can('Certificacion editar')
		<a class="btn btn-sm btn-info" href="{{ route('certificacion.editar', $id) }}"><i class="fas fa-edit"></i> Editar</a>
	@endcan
	@can('Certificacion borrar')
		@if($activo==1)
			<a class="btn btn-sm btn-danger" href="{{ route('certificacion.activar', $id) }}"><i class="fas fa-times-circle"></i> Eliminar</a>
		@else
			<a class="btn btn-sm btn-info" href="{{ route('certificacion.activar', $id) }}"><i class="fas fa-check-circle"></i> Activar</a>
		@endif
	@endcan
</div>