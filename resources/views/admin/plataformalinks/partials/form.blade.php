<div class="form-group">
    {!! Form::label('plataforma', 'Plataforma:') !!}
    {!! Form::text('plataforma', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre de la plataforma ...',
    ]) !!}

    @error('plataforma')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el link de la plataforma ...',
    ]) !!}

    @error('link')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('contenido_id', 'Acontenido al que pertenece:') !!}
    {!! Form::select('contenido_id', $contenidos, null, [
        'class' => 'form-control',
    ]) !!}

    @error('contenido_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


