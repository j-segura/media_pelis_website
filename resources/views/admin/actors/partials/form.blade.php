<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre del actor ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug del nombre del actor ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto', [
        'class' => 'form-control',
    ]) !!}

    @error('foto')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese un link de informacion del actor ...',
    ]) !!}

    @error('link')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>