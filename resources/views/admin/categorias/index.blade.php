@extends('adminlte::page')

@section('title', 'categorias')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <div class="card-header pl-0">
                <a href="{{ route('admin.categorias.create') }}" class="btn btn-success">Agragar nueva categoria</a>
            </div>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.categorias.edit', $categoria) }}">editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.categorias.destroy', $categoria) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bnt btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
@stop