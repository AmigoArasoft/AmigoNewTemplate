{{$volumen}}
@can('Viaje cambiar volumen')
	<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalChangeVolume" onclick="cambiarVolumen({{ $id }})">
		<i class="fas fa-sync-alt"></i>
	</button>
@endcan