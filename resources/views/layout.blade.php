<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        @section('theme')
            <link rel="stylesheet" href="/css/colours.css">
            <link rel="stylesheet" href="/css/default.css">
            <link rel="stylesheet" href="/css/app.css">
        @show
        <style>
        .slide-fade-enter-active {
            transition: all .3s ease;
        }
        .slide-fade-leave-active {
            transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
        }
        .slide-fade-enter, 
        .slide-fade-leave-to {
            transform: translateX(10px);
            opacity: 0;
        }
        </style>
        
    </head>
    <body>
        <div id="app">
            <p v-text="ratingValue"></p>
            <div id="header">
                @section ('header-back-button')
                    <div class="spacer"></div>
                @show
                <div id="logo">UMDB</div>
                @guest
                    <a href="/login" id="user">Login/Register</a>
                @endguest

                @auth
                    <a id="user" 
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
            <transition name="slide-fade">
                <div id="content" v-show="show == true">
                    @yield('content')
                </div>
            </transition>

            @section('background')
                <div id="background"></div>
            @show
        </div>
    </body>
</html>
