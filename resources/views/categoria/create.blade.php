<x-app-layout>
    <x-nav_bar_admin>
        <div class="admin_tables">
            <h1>Creando una nueva categoria</h1>
            <a href="{{ route('categorias_index') }}">volver</a><br><br>
            <form action="{{ route('categoria_store') }}" method="POST">
                @csrf
    
                <input type="text" name="name" placeholder="nombre" value="{{ old('name') }}"><br>
    
                <button type="submit">Crear</button>
    
            </form>
        </div>
    </x-nav_bar_admin>
</x-app-layout>
