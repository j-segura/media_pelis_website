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

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop

