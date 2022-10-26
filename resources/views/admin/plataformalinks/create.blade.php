@extends('adminlte::page')

@section('title', 'plataforma links')

@section('content_header')
    <h1>Agregar nuevo link</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.plataformalinks.store',
            ]) !!}

            @include('admin.plataformalinks.partials.form')

            {!! Form::submit('Agregar link', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop