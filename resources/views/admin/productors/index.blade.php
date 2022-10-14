@extends('adminlte::page')

@section('title', 'productores')

@section('content_header')
    <h1>Lista de productores</h1>
@stop

@section('content')
    @livewire('admin.productors-index')
@stop
