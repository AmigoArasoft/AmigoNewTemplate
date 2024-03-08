<div class="row">
    <div class="col">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre de la tarifa" wire:model="nombreTarifa"{{ ($actionTarifa=='Desactivar') ? ' disabled' : '' }}>
            @error('nombreTarifa')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>Materiales</label>
            <div class="row">
                @foreach($materialesListaTarifa as $i)
                    <div class="col-md-3">
                        <input wire:model="materialesTarifa" type="checkbox" value="{{ $i->id }}"{{ ($actionTarifa=='Desactivar') ? ' disabled' : '' }}> {{ $i->nombre }}
                    </div>
                @endforeach
                @error('materialesTarifa')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
</div>