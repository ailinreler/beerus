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
      <div class="logo-menu">
        <div class="container">
          <div class="row middle-xs between-xs">
            <div class="logo col-xs-12 col-sm-4 center-xs start-sm ">
              <img src="{{asset('images/logo.jpg')}}" class="img"alt="">
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

    <div class="main">
      <div class="container formulario">
        <form method="POST" action="/register">
            {{ csrf_field() }}

          <ul class="flex-outer">

            <li class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" placeholder="Ingrese su nombre aqui" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </li>

            <li class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Ingrese su email aqui" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </li>

            <li class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password">Contraseña</label>
              <input type="password" id="password" name="password" placeholder="Ingrese su contraseña aqui" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </li>

            <li>
              <label for="password-confirm">Confirme Contraseña</label>
              <input type="password" id="password-confirm" name="password_confirmation" placeholder="Reingrese su contraseña aqui" required>
            </li>

            <li>
              <label for="avatar">Foto de perfil</label>
              <input type="file" name="" id="avatar" value="">
            </li>

            <li>
              <button type="submit">Submit</button>
            </li>

          </ul>

        </form>

      </div>
    </div>

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
  </body>
</html>
