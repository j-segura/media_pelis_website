@extends('adminlte::page')

@section('title', 'generos')

@section('content_header')
    <h1>Editar genero</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($genero, [
                'route' => ['admin.generos.update', $genero],
                'method' => 'put',
            ]) !!}

            @include('admin.generos.partials.form')

            {!! Form::submit('Actualizar genero', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
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
