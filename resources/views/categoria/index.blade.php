<x-app-layout>
    <x-nav_bar_admin>
        <a href="{{ route('categoria_crear') }}">Crear una nueva categoria</a><br><br>
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>
                        <td><a href="{{ route('categoria_edit', $categoria) }}">EDITAR</a></td>
                        <td>
                            <form action="{{ route('categoria_destroy', $categoria) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-nav_bar_admin>
</x-app-layout>
