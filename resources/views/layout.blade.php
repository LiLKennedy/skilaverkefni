<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @section('theme')
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="../css/colours.css">
            <link rel="stylesheet" href="../css/default.css">
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
            @section('background')
                <div id="background"></div>
            @show
            <transition name="slide-fade">
                <div id="content" v-if="show = show">
                    @yield('content')
                </div>
            </transition>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data() {
                    return {
                        show: false
                    }
                },
                mounted () {
                    this.show = true
                }
            });
        </script>
    </body>
</html>
