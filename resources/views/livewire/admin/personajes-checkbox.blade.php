<div class="form-group">

    <p class="font-weight-bold">Personajes:</p>

    <div class="mb-3">
        <input wire:model="search" class="form-control" placeholder="Buscar personaje ...">
    </div>

    @foreach ($personajes as $personaje)
        <label class="mr-2">
            {!! Form::checkbox('personajes[]', $personaje->id, null) !!}
            {{ $personaje->name }}
        </label>
    @endforeach

    @error('personajes')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
