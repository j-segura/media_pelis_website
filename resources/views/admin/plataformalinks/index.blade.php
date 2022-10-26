@extends('adminlte::page')

@section('title', 'plataform links')

@section('content_header')
    <h1>Lista de plataformas de reproduccion</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop

@section('content')
    @livewire('admin.links-index')
@stop

