@extends('adminlte::page')

@section('title', 'actores')

@section('content_header')
    <h1>Lista de actores</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop

@section('content')
    @livewire('admin.actores-index')
@stop

<style>
    .foto {
        width: 60px;
        height: 80px;
    }
    
</style>
