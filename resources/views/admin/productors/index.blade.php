@extends('adminlte::page')

@section('title', 'productores')

@section('content_header')
    <h1>Lista de productores</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop

@section('content')
    @livewire('admin.productors-index')
@stop
