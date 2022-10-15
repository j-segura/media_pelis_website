<div>
    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.personajes.create') }}" class="btn btn-success">Agragar nuevo personaje</a>
        </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar ...">
        </div>

        @if ($personajes->count())
            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
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

            <div class="card-footer">
                {{ $personajes->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun registro! :(</strong>
            </div>
        @endif

    </div>
</div>
