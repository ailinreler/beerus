@extends('layouts.app')

@section('content')
  <div class="main">
    <div class="container formulario">
      <form method="POST" action="/login">
        {{ csrf_field() }}
        <ul class="flex-outer">
          <li>
            <label for="email">Email</label>
            <input name="email" type="email" id="email" placeholder="Ingrese su email aqui">
          </li>
          <li>
            <label for="password">Contraseña</label>
            <input name="password" type="password" id="password" placeholder="Ingrese su contraseña aqui">
          </li>
          <li>
            <button type="submit">Submit</button>
          </li>
        </ul>
      </form>
    </div>
  </div>
@endsection
