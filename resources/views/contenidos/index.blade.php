<x-app-layout>
    <section id="main">
        <!-- showcase --------->

        <h1 class="showcase_heading">RECOMENDADAS</h1>

        <ul id="autoWidth" class="cs-hidden">
            @foreach ($recomendadas as $recomendada)
                <li class="item-a">
                    <div class="showcase_box">
                        <a href="{{ route('contenidos.show', $recomendada) }}">
                            <img src="/imagenes/contenido/banners/{{ $recomendada->banner }}">
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>


    </section>

    <!-- ultimas estrenos -->
    <section id="latest">
        <h2 class="latest_heading">Ultimos Estrenos</h2>

        <ul id="autoWidth2" class="cs-hidden">

            @foreach ($estrenos as $estreno)
                <li class="item-a">
                    <a href="{{ route('contenidos.show', $estreno) }}" class="latest_box">
                        <div class="latest_b_img">
                            <img src="/imagenes/contenido/portadas/{{ $estreno->portada }}">
                        </div>
                        <div class="latest_b_text">
                            <div class="flex">
                                @foreach ($estreno->generos as $genero)
                                    <p class="generos">{{ $genero->name }}</p>
                                @endforeach
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
    </section>

    <!-- filter bar -->
    <div class="filter_bar">
        <div class="filter_dropdowns">
            <select name="genre" id="genre">
                <option value="todos">Todos los generos</option>
                <option value="accion">Accion</option>
                <option value="aventura">Aventura</option>
                <option value="animada">Animada</option>
                <option value="horror">Horror</option>
            </select>

            <select name="year" id="year">
                <option value="todos">Todos los años</option>
                <option value="2022">2022</option>
                <option value="2020-2021">2020-2021</option>
                <option value="2010-2019">2010-2019</option>
                <option value="2000-2009">2000-2009</option>
                <option value="1980-1999">1980-1999</option>
            </select>
        </div>

        <div class="filter_radios">

            <input type="radio" name="grade" id="destacadas" checked>
            <label for="destacadas">Destacadas</label>

            <input type="radio" name="grade" id="populares" checked>
            <label for="populares">Populares</label>

            <input type="radio" name="grade" id="nuevas" checked>
            <label for="nuevas">Nuevas</label>

            <div class="checked_radio_bg"></div>

        </div>
    </div>

    <!-- MOVIES -------------->
    {{-- <div class="movies_heading">
        <h2>Peliculas</h2>
    </div> --}}

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

    <!-- btn ----------->
    {{-- <div class="btns">
        <a href="#">Anterior</a>
        <a href="#">Siguiente</a>
    </div> --}}
</x-app-layout>


<style>
    .generos {
        margin-right: 7px !important;
    }
</style>
