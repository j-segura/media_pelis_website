@php

$nav_admin_links = [
    [
        'name' => 'Categorias',
        'route' => route('categorias_index'),
        'active' => request()->routeIs('categorias_index'),
    ],

    [
        'name' => 'Generos',
        'route' => route('generos_index'),
        'active' => request()->routeIs('generos_index'),
    ],

    [
        'name' => 'Productores',
        'route' => route('productores_index'),
        'active' => request()->routeIs('productores_index'),
    ],

    [
        'name' => 'Actores',
        'route' => route('actors_index'),
        'active' => request()->routeIs('actors_index'),
    ],

    [
        'name' => 'Personajes',
        'route' => route('personajes_index'),
        'active' => request()->routeIs('personajes_index'),
    ],
];

@endphp

<div class="admin_section">

    <div id="nav_bar_admin">
        <ul>
            @foreach ($nav_admin_links as $nav_admin_link)
                <li>
                    <x-admin_link href="{{ $nav_admin_link['route'] }}" :active="$nav_admin_link['active']">
                        {{ $nav_admin_link['name'] }}
                    </x-admin_link>
                </li>
            @endforeach
        </ul>
    </div>

    <main id="tables">
        {{ $slot }}
    </main>

</div>

<style>
    .admin_section {
        display: flex;
        height: 100%;
    }

    /*--- NAV BAR ADMINISTRACION ----------------------*/

    #nav_bar_admin {
        height: 90vh;
        width: 250px;
        background: #222;
        color: white;
        padding: 6px 0;
    }

    #nav_bar_admin ul {
        width: 100%;
    }

    .link_active_admin {
        width: 100%;
        display: flex;
        justify-content: start;
        align-items: center;
        padding: 10px 0 10px 15px;
        border-left: 5px solid #546de5;
        background: #546ce525;
    }

    .link_admin {
        width: 100%;
        display: flex;
        justify-content: start;
        align-items: center;
        padding: 10px 0 10px 15px;
    }

    .link_admin:hover {
        border-left: 5px solid rgb(151, 151, 151);
        background: #ffffff0a;
    }


    /* MAIN OF TABLES -------------------*/

    #tables {
        width: 100%;
        height: 90vh;
        padding: 40px;
        overflow: scroll;
    }

</style>
