@extends('adminlte::page')

@section('title', 'personajes')

@section('content_header')
    <h1>Agregar un nuevo personaje</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.personajes.store',
            ]) !!}

            @include('admin.personajes.partials.form')

            {!! Form::submit('Agregar personaje', ['class' => 'btn btn-primary']) !!}
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