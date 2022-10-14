@extends('adminlte::page')

@section('title', 'actores')

@section('content_header')
    <h1>Lista de actores</h1>
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
