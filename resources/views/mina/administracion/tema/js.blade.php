<script>
$(document).ready(function() {
    $('#tabla').DataTable({
        "aaSorting": [[ 1 ]],
        "autoWidth": false,
    	"serverSide": true,
    	"ajax": "{{ route('tema.listar') }}",
    	"columns": [
            @canany(['Tema editar', 'Tema borrar'])
    		    {data: 'botones', class: 'text-center', orderable: false},
            @endcanany
    		{data: 'nombre'},
            {data: 'parametros', orderable: false},
    	],
    	"language": {
           	"url": "{{ asset('js/Spanish.lang') }}"
       	}
    });
} );
</script>