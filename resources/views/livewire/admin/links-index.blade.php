<div>
    @if (session('info'))
        <div class="alert_by_me">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.plataformalinks.create') }}" class="btn btn-success">Agragar nueva plataforma link</a>
        </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar ...">
        </div>

        @if ($plataformalinks->count())
            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>plataforma</th>
                            <th>link</th>
                            <th>contenido</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plataformalinks as $plataformalink)
                            <tr>
                                <td>{{ $plataformalink->id }}</td>
                                <td>{{ $plataformalink->plataforma }}</td>
                                <td>
                                    <a class="link_usables" href="{{ $plataformalink->link }}"
                                        target="_black">{{ $plataformalink->link }}</a>
                                </td>
                                <td>{{ $plataformalink->contenido->titulo }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.plataformalinks.edit', $plataformalink) }}">editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.plataformalinks.destroy', $plataformalink) }}" method="POST">
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
                {{ $plataformalinks->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun registro! :(</strong>
            </div>

        @endif

    </div>
</div>
