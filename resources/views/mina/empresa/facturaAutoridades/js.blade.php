<script>
    function dataTable(){
        operador_id = $("#operador_id").val();

        if(operador_id == '') return;

        desde = $("#desdeForm").val();
        hasta = $("#hastaForm").val();
        
        // Destruir el DataTable existente si existe
        if ($.fn.DataTable.isDataTable('#tabla')) {
            $('#tabla').DataTable().destroy();
        }

        if ($.fn.DataTable.isDataTable('#tablaTopes')) {
            $('#tablaTopes').DataTable().destroy();
        }
        $('#tabla').DataTable({
            "aaSorting": [[ 1, "desc" ]],
            "pageLength": 50,
            "autoWidth": false,
            "serverSide": true,
            "ajax":  {
                url: `{{ route('facturaAutoridades.listar') }}`,
                type: 'GET',
                data: {
                    desde: desde,
                    hasta: hasta,
                    operador_id: operador_id
                }
            },
            "columns": [
                {data: 'id', name: 'viajes.id'},
                {data: 'nro_viaje', name: 'viajes.nro_viaje'},
                {data: 'fecha', name: 'viajes.fecha_nombre'},
                {data: 'operador', name: 'terceros.nombre'},
                {data: 'placa', name: 'vehiculos.placa'},
                {data: 'nombre', name: 'materias.nombre'},
                {data: 'volumen', className:'text-right'},
                {
                    data: 'volumen_manual',
                    className:'text-center',
                    render: function(data) {
                        return data == 1 ? 'SI' : 'NO';
                    }
                },
                {data: 'digitador', name: 'users.name'},
                {data: 'activo', class: 'text-center', orderable: false},
                {data: 'certificado', class: 'text-center', orderable: false},
            ],
            "language": {
                   "url": "{{ asset('js/Spanish.lang') }}"
               }
        });
        $('#tablaTopes').DataTable({
            "dom": "t",
            "serverSide": true,
            "ajax":  {
                url: `{{ route('tope.listar') }}`,
                type: 'GET',
                data: {
                    desde: desde,
                    hasta: hasta,
                    operador_id: operador_id
                }
            },
            "columns": [
                {data: 'operador', name: 'terceros.nombre'},
                {data: 'desde', name: 'tope.desde'},
                {data: 'hasta', name: 'tope.hasta'},
                {
                    data: 'tope',
                    name: 'tope.tope',
                    render: function(data, type, row) {
                        return new Intl.NumberFormat('es-CO').format(data);
                    }
                },
            ],
            "language": {
                "url": "{{ asset('js/Spanish.lang') }}"
            }
        });
    }
</script>