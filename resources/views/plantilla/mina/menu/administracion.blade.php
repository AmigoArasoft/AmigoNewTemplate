@canany(['Parametro leer', 'Parametro crear', 'Parametro editar', 'Parametro borrar',
        'Grupo leer', 'Grupo crear', 'Grupo editar', 'Grupo borrar',
        'Tercero leer', 'Tercero crear', 'Tercero editar', 'Tercero borrar',
        'Material leer', 'Material crear', 'Material editar', 'Material borrar',
        'Tema leer', 'Tema crear', 'Tema editar', 'Tema  borrar',
    ])
<ul class="slide-menu child1">
    @canany(['Tercero leer', 'Tercero crear', 'Tercero editar', 'Tercero borrar'])
    <li class="slide">
        <a href="{{ route('tercero') }}" class="side-menu__item">Terceros</a>
    </li>
    @endcanany
    @canany(['Material leer', 'Material crear', 'Material editar', 'Material borrar'])
    <li class="slide">
        <a href="{{ route('material') }}" class="side-menu__item">Materiales</a>
    </li>
    @endcanany
    @canany(['Grupo leer', 'Grupo crear', 'Grupo editar', 'Grupo borrar'])
    <li class="slide">
        <a href="{{ route('grupo') }}" class="side-menu__item">Grupos</a>
    </li>
    @endcanany
    @canany(['Parametro leer', 'Parametro crear', 'Parametro editar', 'Parametro borrar'])
    <li class="slide">
        <a href="{{ route('parametro') }}" class="side-menu__item">Parámetros</a>
    </li>
    @endcanany
</ul>
@endcanany

