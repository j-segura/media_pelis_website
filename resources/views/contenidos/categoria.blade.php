<x-app-layout>
    <h1 class="uppercase text-center text-xl font-bold mt-10">{{ $categoria->name }}</h1>
    <section id="movies_list">

        @foreach ($contenidos as $contenido)
            <div class="movies_box">
                <a  href="{{ route('contenidos.show', $contenido) }}" class="movies_img">
                    <img src="/imagenes/contenido/portadas/{{ $contenido->portada }}">
                </a>
                <a href="{{ route('contenidos.show', $contenido) }}" class="descroption_a">
                    {{ $contenido->titulo }}
                </a>
            </div>
        @endforeach

        <div class="mb-16 mt-10">
            {{ $contenidos->links() }}
        </div>

    </section>
</x-app-layout>