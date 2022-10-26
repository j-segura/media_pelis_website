<div>
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el titulo o nombre del contenido ...',
        ]) !!}

        @error('titulo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group mb-4">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el slug del contenido ...',
            'readonly',
        ]) !!}

        @error('slug')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset($contenido->portada)
                    <img src="/imagenes/contenido/portadas/{{ $contenido->portada }}">
                @else
                    <img id="picture_portada" src="" class="mb-3">
                @endisset
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('portada', 'Portada:') !!}
                {!! Form::file('portada', [
                    'class' => 'form-control-file',
                    'accept' => 'image'
                ]) !!}

                @error('portada')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <hr>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset($contenido->banner)
                    <img src="/imagenes/contenido/banners/{{ $contenido->banner }}">
                @else
                    <img id="picture_banner" src="" class="mb-3">
                @endisset
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('banner', 'Banner:') !!}
                {!! Form::file('banner', [
                    'class' => 'form-control-file',
                    'accept' => 'image'
                ]) !!}

                @error('banner')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('duracion', 'Duracion:') !!}
        {!! Form::text('duracion', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la duracion del contenido ...',
        ]) !!}

        @error('duracion')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('sinopsis', 'Sinopsis:') !!}
        {!! Form::textarea('sinopsis', null, [
            'class' => 'form-control',
        ]) !!}

        @error('sinopsis')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('trailer_link', 'Trailer link:') !!}
        {!! Form::text('trailer_link', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el link de del trailer del contenido ...',
        ]) !!}

        @error('trailer_link')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('año', 'Año:') !!}
        {!! Form::select('año', $years, null, ['class' => 'form-control']) !!}

        @error('año')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Estado:</p>

        <label class="mr-3">
            {!! Form::radio('status', 1, true) !!}
            Normal
        </label>

        <label class="mr-3">
            {!! Form::radio('status', 2) !!}
            Estreno
        </label>

        <label class="mr-3">
            {!! Form::radio('status', 3) !!}
            Recomendada
        </label>

        @error('status')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <hr>

    <div class="form-group">
        <p class="font-weight-bold">Subcategoria:</p>

        <label class="mr-3">
            {!! Form::radio('subcategoria', 1) !!}
            destacada
        </label>

        <label class="mr-3">
            {!! Form::radio('subcategoria', 2) !!}
            pupular
        </label>

        <label class="mr-3">
            {!! Form::radio('subcategoria', 3, true) !!}
            nueva
        </label>

        @error('subcategoria')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('categoria_id', 'Categoria:') !!}
        {!! Form::select('categoria_id', $categorias, null, [
            'class' => 'form-control',
        ]) !!}

        @error('categoria_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Generos:</p>

        @foreach ($generos as $genero)
            <label class="mr-2">
                {!! Form::checkbox('generos[]', $genero->id, null) !!}
                {{ $genero->name }}
            </label>
        @endforeach

        @error('generos')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Productores:</p>

        @foreach ($productors as $productor)
            <label class="mr-2">
                {!! Form::checkbox('productors[]', $productor->id, null) !!}
                {{ $productor->name }}
            </label>
        @endforeach

        @error('productors')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">

        <p class="font-weight-bold">Personajes:</p>

        <div class="personajes">
            @foreach ($personajes as $personaje)
                <label class="mr-2">
                    {!! Form::checkbox('personajes[]', $personaje->id, null) !!}
                    {{ $personaje->name }}
                </label>
                <br>
            @endforeach
        </div>

        @error('personajes')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div>
