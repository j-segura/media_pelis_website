@extends('adminlte::page')

@section('title', 'plataforma link')

@section('content_header')
    <h1>Editar plataforma link</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($plataformalink, [
                'route' => ['admin.plataformalinks.update', $plataformalink],
                'method' => 'put',
            ]) !!}

            @include('admin.plataformalinks.partials.form')

            {!! Form::submit('Actualizar link', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop