@can('Operador activar')
	<a class="btn btn-sm btn-success" href="{{ route('operador.actualizarEstado', [$id, 1]) }}"><i class="fas fa-check"></i> Activar</a>
@endcan