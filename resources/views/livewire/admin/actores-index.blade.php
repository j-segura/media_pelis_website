<div>
    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.actors.create') }}" class="btn btn-success">Agragar nuevo actor</a>
        </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar ...">
        </div>

        @if ($actors->count())
            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nombre</th>
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
                                    <a class="link_usables" href="{{ $actor->link }}"
                                        target="_black">{{ $actor->link }}</a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.actors.edit', $actor) }}">editar</a>
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

            <div class="card-footer">
                {{ $actors->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun registro! :(</strong>
            </div>

        @endif

    </div>
</div>
