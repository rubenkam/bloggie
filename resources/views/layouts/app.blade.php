<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('/css/main-style.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>













<!-- BROKEN -->
<!-- OPTIMIZE -->

    <!-- <div id="app"> -->
        <!-- <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header"> -->

                    <!-- Collapsed Hamburger -->
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav">
                        &nbsp;
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav navbar-right"> -->
                        <!-- Authentication Links -->
                        <!-- @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <!-- <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> -->

        <!-- <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Blog</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

              @if (Auth::check())
                  <li><a href="{{ url('/home') }}">Home</a></li>
              @else
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
              @endif
            </ul>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
          </div>
        </nav> -->


<!-- TODO NAV BAR STYLE OMZETTEN NAAR MATERIALIZE -->



<div class="app">
    <nav>
      <div class="nav-wrapper">
        <div class="">
          <!-- Branding Image -->
          <ul>
          <li>
          <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
          </a>
          <li>

            <li>
          <a href="{{ url('/home') }}">Home</a></li>
        </ul>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
             <ul class="nav navbar-nav">
                &nbsp;
             </ul>

            <!-- Right Side Of Navbar -->
             <ul id="navbar-right_adjustments" class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                 @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                 @else
                 <ul class="rechterkant">
                  <li><a href="{{ url('/posts') }}">posts</a></li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height: 40px; position: absolute; top:12px; left: 4px; border-radius: 50%;">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>


                        <ul class="dropdown-menu" role="menu">
                          <li>
                            <a href="{{ url('profile') }}">
                               profile
                            </a>

                            </li>
                            <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                            </form>
                          </li>
                       </ul>
                     </li>
                   </ul>
                    @endif
                  </ul>
                </div>
              </div>
            </nav>
           @yield('content')
          </div>


















    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>
