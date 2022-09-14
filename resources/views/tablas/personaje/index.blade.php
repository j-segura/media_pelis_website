<x-app-layout>
    <x-nav_bar_admin>
        <div class="header_admin">
            <h1>Hola Bienvanido a Personajes</h1>
            <a href="{{ route('personajes_create') }}" class="crear_btn">
                <i class="fa-solid fa-plus"></i>
                Agregar Personaje
            </a>
        </div>

        <div class="overflow-x-aut shadow-md sm:rounded-lg mb-10">
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
                            Actor
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Descripcion
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personajes as $personaje)
                        <tr class="bg-white dark:bg-white">
                            <th scope="row" class="py-4 px-6 dark:text-black">
                                {{ $personaje->id }}
                            </th>
                            <td class="py-4 px-6 dark:text-black">
                                {{ $personaje->name }}
                            </td>
                            <td class="py-4 px-6 dark:text-black">
                                {{ $personaje->actor->name }}
                            </td>
                            <td class="py-4 px-6 dark:text-black">
                                {{ $personaje->descripcion }}
                            </td>
                            <td class="py-4 px-6 dark:text-black flex">

                                <a href="{{ route('personajes_edit', $personaje) }}" class="btn_editar">Editar</a>

                                <form action="{{ route('personajes_destroy', $personaje) }}" method="post">
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

        {{ $personajes->links() }}

    </x-nav_bar_admin>
</x-app-layout>


