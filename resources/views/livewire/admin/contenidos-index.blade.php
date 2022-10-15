<div>
    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.contenidos.create') }}" class="btn btn-success">Agragar nuevo contenido</a>
        </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar ...">
        </div>

        @if ($contenidos->count())
            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contenidos as $contenido)
                            <tr>
                                <td>{{ $contenido->id }}</td>
                                <td>{{ $contenido->titulo }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.contenidos.edit', $contenido) }}">editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.contenidos.destroy', $contenido) }}" method="POST">
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

            <div class="card-footer">
                {{ $contenidos->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun registro! :(</strong>
            </div>

        @endif

    </div>
</div>
