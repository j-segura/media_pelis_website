@extends('adminlte::page')

@section('title', 'actores')

@section('content_header')
    <h1>Agregar un nuevo actor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.actors.store',
                'enctype' => 'multipart/form-data',
            ]) !!}

            @include('admin.actors.partials.form')

            {!! Form::submit('Agregar actor', [
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
