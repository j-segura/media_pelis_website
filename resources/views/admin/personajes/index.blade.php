@extends('adminlte::page')

@section('title', 'personajes')

@section('content_header')
    <h1>Lista de productores</h1>
@stop

@section('content')
    @livewire('admin.personajes-index')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop
