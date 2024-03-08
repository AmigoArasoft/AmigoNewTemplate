@canany(['Usuario leer', 'Usuario crear', 'Usuario editar', 'Usuario borrar',
    'Rol leer', 'Rol crear', 'Rol editar', 'Rol borrar',
    'Permiso leer', 'Permiso crear', 'Permiso editar', 'Permiso borrar'
])
<ul class="slide-menu child1">
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
@endcanany
</ul>