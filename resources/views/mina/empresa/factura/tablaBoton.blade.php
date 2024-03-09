<div class="hstack gap-2 fs-15">
	@can('Factura editar')
		<a class="btn btn-sm btn-warning" href="{{ route('factura.editar', $id) }}"><i class="fas fa-edit"></i> Editar</a>
	@endcan

	@can('Factura leer')
		<a class="btn btn-sm btn-info" href="{{ route('factura.pdf', $id) }}"><i class="fas fa-file-pdf"></i> Pdf</a>
		<a class="btn btn-sm btn-info" href="{{ route('factura.excel', $id) }}"><i class="fas fa-file-excel"></i> Excel</a>
	@endcan
</div>