<div class="card card-info">
	<div class="card-body">
		<div class="table-responsive">
			<table id="tablaTopes" class="table table-bordered table-striped table-hover table-sm">
			    <thead>
			        <tr class="text-center">
			            <th>Operador</th>
			        	<th>Desde</th>
			            <th>Hasta</th>
			            <th>Total M3</th>
			        </tr>
			    </thead>
			</table>
		</div>
	</div>
</div>

<div class="card card-info">
	<div class="card-body">
		<div class="table-responsive">
			<table id="tabla" class="table table-bordered table-striped table-hover table-sm">
			    <thead>
			        <tr class="text-center">
			        	<th>Viaje</th>
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

@section('scripts')

	<!-- JSVECTOR MAPS JS -->
	<script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
	<script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

	<!-- APEX CHARTS JS -->
	<script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

	<!-- CHARTJS CHART JS -->
	<script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

	<!-- CRM-Dashboard -->
	@vite('resources/assets/js/crm-dashboard.js')
@endsection