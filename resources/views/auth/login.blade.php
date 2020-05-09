@extends('plantilla')

@section('content')

<div id="back"></div>

<div class="login-box login-margin">

  <div class="login-logo">
    <a href="#" style="color: white !important">
      <img src="{{ asset('img/plantilla/logo-blanco-lineal.png') }}" alt="">
    </a>
  </div>

  <!-- /.login-logo -->
  <div class="card">

    <div class="card-body login-card-body">

      <p class="login-box-msg">Iniciar sesión</p>

      <form action="" method="post">

        {{ csrf_field() }}

        <div class="input-group mb-3">

          <input name="username" type="text" class="form-control" placeholder="Nombre de usuario">

          <div class="input-group-append">

            <div class="input-group-text" onclick="getFocus('usuario')">

              <span class="fas fa-envelope"></span>

            </div>

          </div>

        </div>

        <div class="input-group mb-3">

          <input name="password" type="password" class="form-control" placeholder="Password">

          <div class="input-group-append">

            <div class="input-group-text" onclick="getFocus('password')">

              <span class="fas fa-lock"></span>

            </div>

          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
        </div>
      </form>

    </div>

  </div>

</div>

@stop