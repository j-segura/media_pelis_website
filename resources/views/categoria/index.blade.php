<x-app-layout>
    <x-nav_bar_admin>
        <div class="header_admin">
            <h1>Hola Bienvanido a Categorias</h1>
            <a href="{{ route('categoria_crear') }}" class="crear_btn">
                <i class="fa-solid fa-plus"></i>
                Crear Categoria
            </a>
        </div>

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400 bg_color">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombre
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr class="bg-white dark:bg-white">
                            <th scope="row" class="py-4 px-6 dark:text-black">
                                {{ $categoria->id }}
                            </th>
                            <td class="py-4 px-6 dark:text-black">
                                {{ $categoria->name }}
                            </td>
                            <td class="py-4 px-6 dark:text-black flex">
                                <a href="{{ route('categoria_edit', $categoria) }}" class="btn_editar">Editar</a>
                                <form action="{{ route('categoria_destroy', $categoria) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn_eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $categorias->links() }}

    </x-nav_bar_admin>
</x-app-layout>
