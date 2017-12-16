<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beer Us</title>
    <meta name="viewport" content="width=device-width,
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,300,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{asset('css/flexboxgrid.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
  </head>
  <body>

    <header>
      @if (Auth::check())
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">logout</a></li>
          @endif

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      <div class="logo-menu">
        <div class="container">
          <div class="row middle-xs between-xs">
            <div class="logo col-xs-12 col-sm-4 center-xs start-sm ">
              <img src="{{asset('images/logo.jpg')}}" class="img"alt="" href="">
              <a href="{{ url('home') }}">BeerUs</a>
            </div>
            <nav class="menu col-xs-12 col-sm-8 center-xs end-sm">
              <a href="{{ url('/') }}">Inicio</a>
              <a href="{{ url('/login') }}">Iniciar Sesion</a>
              <a href="{{ url('/register') }}">Registrate</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="submenu">
        <div class="container">
          <div class="row center-xs">
            <div class="col-xs">
              <nav>
                <a href="#">Muro</a>
                <a href="#">Amigos</a>
                <a href="#">Búsqueda</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')


    <footer>
      <div class="container">
        <div class="row middle-xs between-xs">
          <div class="col-xs-12 col-sm-4">
            <div class="nav">
              <a href="{{ url('home') }}">Inicio</a>
              <a href="#">FaQ</a>
              <a href="#">Terminos y Condiciones</a>
              <a href="#">Contacto</a>
            </div>
          </div>

          <div class="logo col-xs-12 col-sm-4 footlogo">
            <img src="{{asset('images/logo.jpg')}}" class="img"alt="">
            <a href="{{ url('home') }}">BeerUs</a>
          </div>
        </div>
		</div>
  </footer>


  </body>
</html>
