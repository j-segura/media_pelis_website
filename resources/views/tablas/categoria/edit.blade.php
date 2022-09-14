<x-app-layout>
    <x-nav_bar_admin>
        <div class="admin_tables">
            <div class="header_crear">
                <a href="{{ route('categorias_index') }}" class="volver_btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h1>Actualizar categoria</h1>
            </div>
    
    
            <form action="{{ route('categoria_update', $categoria) }}" method="POST">
                @csrf
                @method('put')
    
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-black">Actual nombre de la Categoria</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $categoria->name) }}"
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-7 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Actualizar
                </button>
            </form>
        </div>
    </x-nav_bar_admin>
</x-app-layout>
