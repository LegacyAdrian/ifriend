@extends('master')

@section('title', 'Modificar Partida')

@section('content')
    <h2>Datos a Modificar</h2>
    <form method="POST" action="/party/{{$party->id}}">
      <input type="hidden" name="_METHOD" value="PUT">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name" value="{{$party->name}}">
          <div id="nameHelp" class="form-text">Nombre de la partida.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
