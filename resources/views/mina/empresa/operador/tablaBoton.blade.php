<div class="hstack gap-2 fs-15">
@can('Operador editar')
	<a class="btn btn-sm btn-info" href="{{ route('operador.editar', $id) }}"><i class="fas fa-edit"></i> Editar</a>
@endcan

@can('Operador inactivar')
	<a class="btn btn-sm btn-warning" href="{{ route('operador.actualizarEstado', [$id, 0]) }}"><i class="fas fa-times"></i> Inactivar</a>
@endcan
</div>