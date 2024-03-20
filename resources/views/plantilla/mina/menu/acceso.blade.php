@canany(['Usuario leer', 'Usuario crear', 'Usuario editar', 'Usuario borrar',
    'Rol leer', 'Rol crear', 'Rol editar', 'Rol borrar',
    'Permiso leer', 'Permiso crear', 'Permiso editar', 'Permiso borrar'
])
<li class="slide has-sub">
    <a href="javascript:void(0);" class="side-menu__item">
        <i class="bx bx-user side-menu__icon"></i>
        <span class="side-menu__label">Acceso</span>
        <i class="fe fe-chevron-right side-menu__angle"></i>
    </a>

    <ul class="slide-menu child1">
        <li class="slide side-menu__label1">
            <a href="javascript:void(0);">Acceso</a>
        </li>
    
        @canany(['Usuario leer', 'Usuario crear', 'Usuario editar', 'Usuario borrar'])
        <li class="slide">
            <a href="{{ route('usuario') }}" class="side-menu__item">Usuarios</a>
        </li>
        @endcanany
        @canany(['Rol leer', 'Rol crear', 'Rol editar', 'Rol borrar'])
        <li class="slide">
            <a href="{{ route('rol') }}" class="side-menu__item">Roles</a>
        </li>
        @endcanany
        @canany(['Permiso leer', 'Permiso crear', 'Permiso editar', 'Permiso borrar'])
        <li class="slide">
            <a href="{{ route('permiso') }}" class="side-menu__item">Permisos</a>
        </li>
        @endcanany
        @canany(['Topes'])
        <li class="slide">
            <a href="{{ route('tope') }}" class="side-menu__item">Topes</a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany