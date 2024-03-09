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
											<i class="bx bx-trip fs-20"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Viajes activos</p>
												<h4 class="fw-semibold mt-1">{{ $viajes_activos }}</h4>
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
											<i class="ti ti-ruler fs-20"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">M3</p>
												<h4 class="fw-semibold mt-1">{{ $volumen }} m3</h4>
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
											<i class="ti ti-check fs-20"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Viajes certificados</p>
												<h4 class="fw-semibold mt-1">{{ $viajes_certificados }}</h4>
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
											<i class="las la-times fs-20"></i>
										</span>
									</div>
									<div class="flex-fill ms-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div>
												<p class="text-muted mb-0">Viajes sin certificar</p>
												<h4 class="fw-semibold mt-1">{{ $viajes_sin_certificados }}</h4>
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
			@can('Viaje crear')
			    <a class="btn btn-sm btn-light text-dark" href="{{ route('viaje.crear') }}">
					<i class="fas fa-plus-circle"></i> Nuevo
				</a>
			@endcan
			<button type="button" class="btn btn-sm btn-light text-dark" onclick="getOperadores()" data-toggle="modal"  data-target="#modalCertificateTrips">
				<i class="fas fa-truck"></i> Certificar viaje
			</button>
		@endif
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="tabla" class="table table-bordered table-striped table-hover table-sm">
			    <thead>
			        <tr class="text-center">
			        	<th>Viaje</th>
			        	@if(Auth::user()->tercero_id == 1)
				        	@canany(['Viaje editar', 'Viaje borrar'])
				        	    <th width="180px">Acción</th>
				        	@endcanany
				        @endif
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