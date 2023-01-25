@extends('master')

@section('title', 'Iniciar Sesion')

@section('content')
    <h2>Datos del usuario</h2>
    <form method="POST" action="/login">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name">
          <div id="nameHelp" class="form-text">Nombre de usuario aqui.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Validar</button>
      </form>
@endsection
