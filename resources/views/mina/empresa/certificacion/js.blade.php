<script>
$(document).ready(function() {
    $('#tabla').DataTable({
        "aaSorting": [[ 1 ]],
        "autoWidth": false,
    	"serverSide": true,
    	"ajax": "{{ route('certificacion.listar') }}",
    	"columns": [
            @canany(['Certificacion editar', 'Certificacion borrar'])
    		    {data: 'botones', class: 'text-center', orderable: false},
            @endcanany
    		{data: 'nombre'},
            {data: 'fecha_certificacion'},
            {data: 'operador'},
            {data: 'activo', class: 'text-center', orderable: false},
    	],
    	"language": {
           	"url": "{{ asset('js/Spanish.lang') }}"
       	}
    });
} );
</script>