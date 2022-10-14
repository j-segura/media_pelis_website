<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre del nuevo personaje ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug del nuevo personaje ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese una descripcion del nuevo personaje ...',
    ]) !!}

    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('actor_id', 'Actor que lo interpreta:') !!}
    {!! Form::select('actor_id', $actors, null, [
        'class' => 'form-control',
    ]) !!}

    @error('actor_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

