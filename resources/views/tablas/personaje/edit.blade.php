<x-app-layout>
    <x-nav_bar_admin>
        <div class="admin_tables">
            <div class="header_crear">
                <a href="{{ route('productores_index') }}" class="volver_btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h1>Actualizar personaje</h1>
            </div>


            <form action="{{ route('personajes_update', $personaje) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-black">Nombre del
                        Personaje</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $personaje->name) }}"
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-black">¿Quien lo
                        interpreta? (Actor)</label>
                    <select name="actor_id" required 
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{ old('actor', $personaje->actor->id) }}">{{ old('name', $personaje->actor->name) }}</option>
                        @foreach ($actors as $actor)
                            <option value="{{ $actor->id }}">{{ $actor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">

                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-black">Descripcion del Personaje</label>
                    <textarea id="message" rows="4" name="descripcion"
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Escribe una descripcion..." required>{{ old('descripcion', $personaje->descripcion) }}</textarea>

                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-7 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Agregar
                </button>


            </form>
        </div>



    </x-nav_bar_admin>
</x-app-layout>
