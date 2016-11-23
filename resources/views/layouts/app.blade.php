<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
   
    <div id="app">
        <nav>
            <div class="nav-wrapper">
                <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'Case Library') }}</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                <i class="material-icons right">arrow_drop_down</i></a>
                                <ul id="dropdown1" class="dropdown-content">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @yield('nav-content')

                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                <i class="material-icons right">arrow_drop_down</i></a>
                                <ul id="dropdown1" class="dropdown-content">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @yield('nav-content')

                    </ul>
            </div>
        </nav>
        <div class="container">
        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                <i class="material-icons right">arrow_drop_down</i></a>
                                <ul id="dropdown1" class="dropdown-content">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
            @yield('content')
        </div>
        
    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    
    <script> $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown({ hover: false } );
    });
    </script>
</body>
</html>
