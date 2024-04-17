<script>
    $(document).ready(function() {
        $('#tabla').DataTable({
            "aaSorting": [[ 0, "desc" ]],
            "autoWidth": false,
            "serverSide": true,
            "ajax": "{{ route('tope.listar') }}",
            "columns": [
                @if(Auth::user()->tercero_id == 1)
                    {data: 'botones', class: 'text-center', orderable: false},
                @endif
                {data: 'operador', name: 'tope.operador'},
                {data: 'trimestre', name: 'tope.trimestre'},
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
    } );
    
    function getOperadores(){
    
        $.ajax({
            type: "GET",
            url: "{{ route('viaje.getOperadores') }}",
            data: {},
            success: function (response) {
                if(response.data){
                    $("#operador_id").empty("");

                    $.each(response.data, function (i, v) { 
                        $("#operador_id").append(`
                            <option value="${i}">${v}</option>
                        `)
                    });
    
                    $("#operador_id").selectpicker("refresh");
                    $("#operador_id option:first").prop('selected', 'selected');
                    $("#operador_id").selectpicker("refresh");
    
                    getOperadorViajeCertificado();
                }
            }
        });
    }
</script>