<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.productors.create') }}" class="btn btn-success">Agragar nuevo productor</a>
        </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar ...">
        </div>

        @if ($productors->count())
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
                        @foreach ($productors as $productor)
                            <tr>
                                <td>{{ $productor->id }}</td>
                                <td>{{ $productor->name }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.productors.edit', $productor) }}">editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.productors.destroy', $productor) }}" method="POST">
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
                {{ $productors->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun registro! :(</strong>
            </div>

        @endif

    </div>
</div>
