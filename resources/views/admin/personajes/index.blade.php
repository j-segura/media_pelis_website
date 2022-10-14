@extends('adminlte::page')

@section('title', 'personajes')

@section('content_header')
    <h1>Lista de productores</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <div class="card-header pl-0">
                <a href="{{ route('admin.personajes.create') }}" class="btn btn-secondary">Agragar nuevo personaje</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Actor</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personajes as $personaje)
                        <tr>
                            <td>{{ $personaje->id }}</td>
                            <td>{{ $personaje->name }}</td>
                            <td>{{ $personaje->actor->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.personajes.edit', $personaje) }}">editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.personajes.destroy', $personaje) }}" method="POST">
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
