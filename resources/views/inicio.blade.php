<x-app-layout>
    <section id="main">
        <!-- showcase --------->

        <h1 class="showcase_heading">ESCAPARATE</h1>

        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="showcase_box">
                    <img src="{{asset('img/images/s-1.jpg')}}">
                </div>
            </li>

            <li class="item-b">
                <div class="showcase_box">
                    <img src="{{asset('img/images/s-2.jpg')}}">
                </div>
            </li>

            <li class="item-c">
                <div class="showcase_box">
                    <img src="{{asset('img/images/s-3.jpg')}}">
                </div>
            </li>

            <li class="item-d">
                <div class="showcase_box">
                    <img src="{{asset('img/images/s-4.jpg')}}">
                </div>
            </li>

            <li class="item-e">
                <div class="showcase_box">
                    <img src="{{asset('img/images/s-5.png')}}">
                </div>
            </li>

            <li class="item-e">
                <div class="showcase_box">
                    <a href="{{route('show')}}">
                        <img src="{{asset('img/images/s-6.jpg')}}">
                    </a>
                </div>
            </li>
        </ul>


    </section>

    <!-- ultimas estrenos -->
    <section id="latest">
        <h2 class="latest_heading">Ultimos Estrenos</h2>

        <ul id="autoWidth2" class="cs-hidden">

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-1.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-2.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-3.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-4.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-5.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-6.jpg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="latest_box">
                    <div class="latest_b_img">
                        <img src="{{asset('img/images/m-7.jpeg')}}">
                    </div>
                    <div class="latest_b_text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>

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

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-1.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-2.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-3.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-4.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-5.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-6.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-7.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

        <div class="movies_box">
            <div class="movies_img">
                <img src="{{asset('img/images/l-8.jpg')}}">
            </div>
            <a href="#" class="descroption_a">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>

    </section>

    <!-- btn ----------->
    <div class="btns">
        <a href="#">Anterior</a>
        <a href="#">Siguiente</a>
    </div>
</x-app-layout>
