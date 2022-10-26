@extends('adminlte::page')

@section('title', 'contenidos')

@section('content_header')
    <h1>Agregar un nuevo contenido</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.contenidos.store',
                'enctype' => 'multipart/form-data'
            ]) !!}

            @include('admin.contenidos.partials.form')

            {!! Form::submit('Agregar contenido', [
                'class' => 'btn btn-primary',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .personajes {
            height: 200px;
            overflow: scroll;
        }
    </style>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $("#titulo").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create(document.querySelector('#sinopsis'))
            .catch(error => {
                console.error(error);
            });

        document.getElementById("portada").addEventListener('change', cambiarImagenPortada);

        function cambiarImagenPortada(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture_portada").setAttribute('src', event.target.result)
            };

            reader.readAsDataURL(file);
        }

        document.getElementById("banner").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture_banner").setAttribute('src', event.target.result)
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop

