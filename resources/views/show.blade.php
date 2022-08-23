<x-app-layout>
    <div id="show">
        <div class="play_container container">

            <img src="{{asset('img/play-page/play-background.jpg')}}" alt="" class="play_img">

            <div class="play_text">
                <h2>Jumanji: En la selva</h2>

                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>

                <div class="tags">
                    <span>Accion</span>
                    <span>Aventura</span>
                    <span>2017</span>
                </div>

                <!-- trailer btn -->
                <a href="https://www.youtube.com/watch?v=leIrosWRbYQ" target="_blank" class="watch_btn">
                    <div class="play_btn">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <span>ver el trailer</span>
                </a>

            </div>  
        </div>

        <div class="about_movie container">
            <h2>Jumanji: En la selva</h2>
            <p>En los años 60 un niño descubre Jumanji, un misterioso juego de mesa. Al empezar una partida, desaparece tras caer en una determinada casilla. Tres décadas después, dos chavales reanudan la partida interrumpida. A medida que progresa el juego, animales selváticos de todo tipo salen del tablero invadiendo el mundo real.</p>

            <!-- casting ---------->
            <h2 class="cast_heading">Elenco de la película</h2>
            <div class="cast">
                <div class="cast_box">
                    <img src="{{asset('img/play-page/cast1.jpg')}}" class="cast_img">
                    <span class="cast_title">Dwayne Johnson</span>
                </div>

                <div class="cast_box">
                    <img src="{{asset('img/play-page/cast2.jpg')}}" class="cast_img">
                    <span class="cast_title">Keren Gillan</span>
                </div>

                <a href="https://es.wikipedia.org/wiki/Kevin_Hart" target="_blank" class="cast_box">
                    <img src="{{asset('img/play-page/cast3.jpg')}}" class="cast_img">
                    <span class="cast_title">Kevin Hart</span>
                </a>

                <div class="cast_box">
                    <img src="{{asset('img/play-page/cast4.jpg')}}" class="cast_img">
                    <span class="cast_title">Jack Black</span>
                </div>

                <div class="cast_box">
                    <img src="{{asset('img/play-page/cast5.jpg')}}" class="cast_img">
                    <span class="cast_title">Nick Jonas</span>
                </div>

                <div class="cast_box">
                    <img src="{{asset('img/play-page/cast6.jpg')}}" class="cast_img">
                    <span class="cast_title">Madison Iseman</span>
                </div>
            </div>          
        </div>

        <div class="plataformas">
            <h2 class="plataformas_title">Ver Pelicula</h2>
            <div class="plataformas_link">
                <a href="https://www.netflix.com/watch/80192646?trackId=255824129&tctx=0%2C0%2CNAPA%40%40%7C4eac2c87-3d5e-4bcb-8439-547ce34565cd-48726550_titles%2F1%2F%2Fjuma%2F0%2F0%2CNAPA%40%40%7C4eac2c87-3d5e-4bcb-8439-547ce34565cd-48726550_titles%2F1%2F%2Fjuma%2F0%2F0%2Cunknown%2C%2C4eac2c87-3d5e-4bcb-8439-547ce34565cd-48726550%7C1%2CtitlesResults%2C80192646" target="_blanck">Netflix</a>
                <a href="https://www1.cuevana3.fm/1992/jumanji-2-en-la-selva" target="_blank">Cuevana</a>
                <a href="">Youtube</a>
            </div>
        </div>
    </div>
</x-app-layout>