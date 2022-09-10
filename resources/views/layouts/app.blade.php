<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="shortcut icon" href="./images/fav icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightslider.css')}}">

    <!-- js links -------------->
    <script src="{{asset('js/JQuery3.3.1.js')}}"></script>
    <script src="{{asset('js/lightslider.js')}}"></script>

    <!-- fontAwesome ----------->
    <script src="https://kit.fontawesome.com/d2131ce8b5.js" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer>
            <div class="footer_container">
                <div class="footer_content_container">
                    <img src="{{ asset('img/images/logo.png') }}" class="website_logo">
                    <span class="footer_info">111 111 111</span>
                    <span class="footer_info">juanda.segura2005@gmail.com</span>
                </div>
                <div class="footer_menus">
                    <div class="footer_content_container">
                        <span class="menu_title">menu</span>
                        <a href="#" class="menu_item_footer">Inicio</a>
                        <a href="#" class="menu_item_footer">Peliculas</a>
                        <a href="#" class="menu_item_footer">Series</a>
                    </div>
                    <div class="footer_content_container">
                        <span class="menu_title">legal</span>
                        <a href="#" class="menu_item_footer">Privacy Policy</a>
                        <a href="#" class="menu_item_footer">Cookies</a>
                        <a href="#" class="menu_item_footer">Terms & Conditions</a>
                    </div>
                </div>

                <div class="footer_content_container">
                    <span class="menu_title">follow us</span>
                    <div class="social_container">
                         <a href="" class="social_link">
                            <i class="fa-brands fa-facebook"></i>
                         </a>
                         <a href="" class="social_link">
                            <i class="fa-brands fa-twitter"></i>
                         </a>
                         <a href="" class="social_link">
                            <i class="fa-brands fa-linkedin"></i>
                         </a>
                         <a href="" class="social_link">
                            <i class="fa-brands fa-instagram"></i>
                         </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- slider script -->
    <script>
        $(document).ready(function(){
            $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                OnSliderLoad: function() {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                }
            });
        });
    </script>

    @stack('modals')

    @livewireScripts
</body>

</html>

<style>
    main {
        padding-top: 60px; 
    }

    .admin_tables {
        width: 100%;
        height: 100vh;
    }
</style>