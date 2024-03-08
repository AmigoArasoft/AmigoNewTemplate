@section('content')

@if (Auth::user()->role->role_id == 1)
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="row">
					<div class="col-xxl-3 col-lg-3 col-md-3">
						<div class="card custom-card hrm-main-card danger">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between">
									<div>
										<span class="avatar avatar-md avatar-rounded bg-danger">
											<i class="ti ti-cash fs-16"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Facturado</p>
												<h4 class="fw-semibold mt-1">$ 1.129.334.122</h4>
											</div>
											<div id="crm-conversion-ratio"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-3 col-md-3">
						<div class="card custom-card hrm-main-card secondary">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between">
									<div>
										<span class="avatar avatar-md avatar-rounded bg-secondary">
											<i class="ti ti-ruler fs-16"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Metros cuadrados</p>
												<h4 class="fw-semibold mt-1">103.544 m2</h4>
											</div>
											<div id="crm-total-revenue"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-3 col-md-3">
						<div class="card custom-card hrm-main-card primary">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between">
									<div>
										<span class="avatar avatar-md avatar-rounded bg-primary">
											<i class="ti ti-truck fs-16"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Viajes facturados</p>
												<h4 class="fw-semibold mt-1">16.890</h4>
											</div>
											<div id="crm-total-customers"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-3 col-md-3">
						<div class="card custom-card hrm-main-card warning">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between">
									<div>
										<span class="avatar avatar-md avatar-rounded bg-warning">
											<i class="ti ti-truck fs-16"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Viajes sin facturar</p>
												<h4 class="fw-semibold mt-1">2,543</h4>
											</div>
											<div id="crm-total-deals"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif
<div class="card card-info">
	<div class="card-header">@yield('titulo')
		@if(Auth::user()->tercero_id == 1)
			@can('Factura crear')
				<a class="btn btn-sm btn-default text-dark" href="{{ route('factura.crear') }}">
					<i class="fas fa-plus-circle"></i> Nuevo
				</a>
			@endcan
		@endif
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="tabla" class="table table-bordered table-striped table-hover table-sm">
				<thead>
					<tr class="text-center">
						@canany(['Factura editar', 'Factura borrar', 'Factura leer'])
							<th width="140px">Acción</th>
						@endcanany
						<th>Informe</th>
						<th>Fecha</th>
						<th>Operador/Transportador</th>
						<th>Desde</th>
						<th>Hasta</th>
						@if (Auth::user()->role->role_id == 1 || Auth::user()->role->role_id == 3)
							<th>Valor</th>
						@endif
						<th>M3</th>
						<th>Anulado</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

@endsection
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