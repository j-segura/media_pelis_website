@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de actores</h1>
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
                <a href="{{ route('admin.actors.create') }}" class="btn btn-secondary">Agragar nuevo actor</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actors as $actor)
                        <tr>
                            <td>{{ $actor->id }}</td>
                            <td>
                                <img src="/imagenes/fotosActores/{{ $actor->foto }}" class="foto">
                            </td>
                            <td>{{ $actor->name }}</td>
                            <td>
                                <a class="link_usables" href="{{ $actor->link }}" target="_black">{{ $actor->link }}</a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.actors.edit', $actor) }}">editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.actors.destroy', $actor) }}" method="POST">
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

<style>
    .foto {
        width: 60px;
        height: 80px;
    }
</style>
