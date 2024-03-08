@canany(['Factura leer', 'Factura crear', 'Factura editar', 'Factura borrar'])
    <li class="slide">
        <a href="{{ route('factura') }}" class="side-menu__item">
            <i class="bx bx-file side-menu__icon"></i>
            <span class="side-menu__label">Informes - VIAJES</span>
        </a>
    </li>
    <li class="slide">
        <a href="{{ route('facturaAutoridades') }}" class="side-menu__item">
            <i class="bx bx-file side-menu__icon"></i>
            <span class="side-menu__label">Informes - AMIGO</span>
        </a>
    </li>
@endcanany
@canany(['Cubicaje leer', 'Cubicaje crear', 'Cubicaje editar', 'Cubicaje borrar'])
    <li class="slide">
        <a href="{{ route('cubicaje') }}" class="side-menu__item">
            <i class="bx bx-ruler side-menu__icon"></i>
            <span class="side-menu__label">Cubicaje</span>
        </a>
    </li>
@endcanany
@canany(['Viaje leer', 'Viaje crear', 'Viaje editar', 'Viaje borrar'])
<li class="slide">
    <a href="{{ route('viaje') }}" class="side-menu__item">
        <i class="bx bx-trip side-menu__icon"></i>
        <span class="side-menu__label">Viajes</span>
    </a>
</li>
@endcanany