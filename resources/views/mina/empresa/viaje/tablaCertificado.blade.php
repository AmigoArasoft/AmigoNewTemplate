@if($certificado)
	@can('Quitar certificado viaje')
		<a href="{{ route('quitar.certificado.viaje', $id) }}" class="btn btn-sm btn-danger">
			<i class="fas fa-times"></i>
		</a>
	@endcan
	<br>
	Nro: {{$numero_certificacion}} | {{ date('d/m/Y', strtotime($fecha_certificacion)) }}
@else
	NO
@endif