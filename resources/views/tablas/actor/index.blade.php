<x-app-layout>
    <x-nav_bar_admin>

        <div class="header_admin">
            <h1>Hola Bienvanido a Actores</h1>
            <a href="{{ route('actors_create') }}" class="crear_btn">
                <i class="fa-solid fa-plus"></i>
                Añadir Actor
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
                            Foto
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombre
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Link
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actors as $actor)
                        <tr class="bg-white dark:bg-white">
                            <th scope="row" class="py-4 px-6 dark:text-black">
                                {{ $actor->id }}
                            </th>
                            <th scope="row" class="py-4 px-6 dark:text-black">
                                <img src="/imagenes/fotosActores/{{ $actor->foto }}" class="foto">
                            </th>
                            <td class="py-4 px-6 dark:text-black">
                                {{ $actor->name }}
                            </td>
                            <td class="py-4 px-6 dark:text-black">
                                <a class="link_usables" href="{{ $actor->link }}" target="_black">{{ $actor->link }}</a>
                            </td>
                            <td class="py-4 px-6 dark:text-black flex .acciones">
                                <a href="{{ route('actors_edit', $actor) }}" class="btn_editar">Editar</a>
                                <form action="{{ route('actors_destroy', $actor) }}" method="post">
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

        {{ $actors->links() }}

    </x-nav_bar_admin>
</x-app-layout>
