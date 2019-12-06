<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

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

        .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
        }
        </style>
        
    </head>
    <body>
        <div id="app">
            <div id="header">
                @section ('header-back-button')
                    <div class="spacer"></div>
                @show
                <div id="logo">UMDB</div>
                @guest
                    <a @click="showLogin = true" id="user">Login/Register</a>
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

            <transition name="fade">
            <div class="modal" v-if="showLogin == true">
                <div class="modalbackground" @click="showLogin = false"></div>
                <div class="modalcontent">
                    <div class="header">Login</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="logininput form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="logininput form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <div class="bottombtns">
                                        @if (Route::has('password.request'))
                                        <a class=" btn-forgotpass" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        
                                    @endif
                                    <a class="btn-register" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </transition>
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
