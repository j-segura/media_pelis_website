<x-app-layout>
    <x-nav_bar_admin>
        <div class="admin_tables">
            <h1>Actualizar una nueva categoria</h1>
            <a href="{{ route('categorias_index') }}">volver</a><br><br>
            <form action="{{ route('categoria_update', $categoria) }}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="nombre" value="{{ old('name', $categoria->name) }}"><br>
    
                <button type="submit">Actualizar</button>
    
            </form>
        </div>
    </x-nav_bar_admin>
</x-app-layout>
