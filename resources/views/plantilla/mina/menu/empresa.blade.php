@canany(['Empresa leer', 'Empresa crear', 'Empresa editar', 'Empresa borrar',
        'Operador leer', 'Operador crear', 'Operador editar', 'Operador borrar',
        'Transporte leer', 'Transporte crear', 'Transporte editar', 'Transporte borrar',
        'Vehiculo leer', 'Vehiculo crear', 'Vehiculo editar', 'Vehiculo borrar',
        'Documento leer', 'Documento crear', 'Documento editar', 'Documento borrar',
    ])
<li class="slide has-sub">
    <a href="javascript:void(0);" class="side-menu__item">
        <i class="bx bx-store side-menu__icon"></i>
        <span class="side-menu__label">Empresa</span>
        <i class="fe fe-chevron-right side-menu__angle"></i>
    </a>

    <ul class="slide-menu child1">
        <li class="slide side-menu__label1">
            <a href="javascript:void(0);">Empresa</a>
        </li>
        @canany(['Documento leer', 'Documento crear', 'Documento editar', 'Documento borrar'])
        <li class="slide">
            <a href="{{ route('documento') }}" class="side-menu__item">Documento</a>
        </li>
        @endcanany
        @canany(['Certificacion leer', 'Certificacion crear', 'Certificacion editar', 'Certificacion borrar'])
        <li class="slide">
            <a href="{{ route('certificacion') }}" class="side-menu__item">Certificaciones</a>
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
</li>
@endcanany