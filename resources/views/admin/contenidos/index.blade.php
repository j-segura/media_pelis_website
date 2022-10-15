@extends('adminlte::page')

@section('title', 'contenidos')

@section('content_header')
    <h1>Lista de contenidos</h1>
@stop

@section('content')
    @livewire('admin.contenidos-index')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop