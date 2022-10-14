@extends('adminlte::page')

@section('title', 'productores')

@section('content_header')
    <h1>Crear un nuevo Productor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.productors.store',
            ]) !!}

            @include('admin.productors.partials.form')

            {!! Form::submit('Agregar productor', ['class' => 'btn btn-primary']) !!}
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
