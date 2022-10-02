<x-app-layout>
    <div id="show">
        <div class="play_container container">

            <img src="/imagenes/contenido/banners/{{ $contenido->banner }}" alt="" class="play_img">

            <div class="play_text">
                <h2>{{ $contenido->titulo }}</h2>

                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>

                <div class="tags">
                    @foreach ($contenido->generos as $genero)
                    <a href="{{ route('contenidos.genero', $genero) }}">{{ $genero->name }}</a>
                    @endforeach
                </div>

                <!-- trailer btn -->
                <a href="{{ $contenido->trailer_link }}" target="_blank" class="watch_btn">
                    <div class="play_btn">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <span>ver el trailer</span>
                </a>

            </div>  
        </div>

        <div class="about_movie container">
            <h2>{{ $contenido->titulo }}</h2>
            <p>{{ $contenido->sinopsis }}</p>

            <!-- casting ---------->
            <h2 class="cast_heading">Elenco de la película</h2>
            <div class="cast">
                @foreach ($contenido->personajes as $personaje)
                <div class="cast_box">
                    <img src="/imagenes/fotosActores/{{ $personaje->actor->foto }}" class="cast_img">
                    <span class="cast_title">{{ $personaje->actor->name }}</span>
                    <span class="cast_title">{{ $personaje->name }}</span>
                </div>
                @endforeach
            </div>          
        </div>

        <div class="plataformas">
            <h2 class="plataformas_title">Ver Pelicula</h2>
            <div class="plataformas_link">
                @foreach ($contenido->plataformalinks as $link)
                    <a href="{{  $link->link }}" target="_blanck">{{ $link->plataforma }}</a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>