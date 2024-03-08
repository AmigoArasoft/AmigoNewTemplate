@canany(['Empresa leer', 'Empresa crear', 'Empresa editar', 'Empresa borrar',
        'Operador leer', 'Operador crear', 'Operador editar', 'Operador borrar',
        'Transporte leer', 'Transporte crear', 'Transporte editar', 'Transporte borrar',
        'Vehiculo leer', 'Vehiculo crear', 'Vehiculo editar', 'Vehiculo borrar',
        'Documento leer', 'Documento crear', 'Documento editar', 'Documento borrar',
    ])
<ul class="slide-menu child1">
    @canany(['Documento leer', 'Documento crear', 'Documento editar', 'Documento borrar'])
    <li class="slide">
        <a href="{{ route('documento') }}" class="side-menu__item">Documento</a>
    </li>
    @endcanany
    @canany(['Empresa leer', 'Empresa crear', 'Empresa editar', 'Empresa borrar'])
    <li class="slide">
        <a href="{{ route('empresa') }}" class="side-menu__item">Empresa</a>
    </li>
    @endcanany
    @canany(['Operador leer', 'Operador crear', 'Operador editar', 'Operador borrar'])
    <li class="slide">
        <a href="{{ route('operador') }}" class="side-menu__item">Operador</a>
    </li>
    @endcanany
    @canany(['Transporte leer', 'Transporte crear', 'Transporte editar', 'Transporte borrar'])
    <li class="slide">
        <a href="{{ route('transporte') }}" class="side-menu__item">Transportador</a>
    </li>
    @endcanany
    @canany(['Vehiculo leer', 'Vehiculo crear', 'Vehiculo editar', 'Vehiculo borrar'])
    <li class="slide">
        <a href="{{ route('vehiculo') }}" class="side-menu__item">Vehículo</a>
    </li>
    @endcanany
</ul>
@endcanany