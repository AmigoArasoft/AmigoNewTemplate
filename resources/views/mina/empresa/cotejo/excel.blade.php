<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	<div style="font-size:16px !important;">
		<img src="{{storage_path('app/public/villaUfaz.jpg')}}">
		<h4 style="font-size:16px !important;">Cotejo realizado para el Informe: {{ $cotejo }}</h4>
	</div>
	<table style="border-collapse: collapse;">
		<thead>
			<tr>
				<th style="border: 2px solid #000;text-align:center;font-weight:bold;font-size:14px !important;"><b>NRO VALE</b></th>
				<th style="border: 2px solid #000;text-align:center;font-weight:bold;font-size:14px !important;"><b>DESCRIPCIÓN</b></th>
			</tr>
		</thead>
	    <tbody >
			@foreach ($errores as $item)
				<tr>
					<td style="border: 1px solid #000;font-size:12px !important;">
						{{ $item['viaje'] }}
					</td>
					<td style="border: 1px solid #000;font-size:12px !important;">
						{{ $item['descripcion'] }}
					</td>
				</tr>
			@endforeach
	    </tbody>
	</table>
</body>
</html>