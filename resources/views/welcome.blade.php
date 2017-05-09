<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ URL::asset('/css/main-style.css') }}">
        <link rel="stylesheet" type="text/css" href="/public/css/main-style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Laravel-Blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        @if (Auth::check())
            <li><a href="{{ url('/home') }}">Home</a></li>
        @else
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endif
      </ul>
    </div>
  </nav>


  <div class="welkom">
      <div class="row">
          <center><h2>Welkom op mijn blog</h2>
            <button
             class="btn waves-effect waves-light" type="submit" name="action"><a href="{{ url('/register') }}" >Take me to the blog!
            <i class="material-icons right">send</i>
          </button></center> <!-- -->
          </div>
        </div>









    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

</html>
