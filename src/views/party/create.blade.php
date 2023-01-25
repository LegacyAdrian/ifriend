@extends('master')

@section('title', 'Crear Partida')

@section('content')
    <h2>Datos de la nueva partida </h2>
    <form method="POST" action="/party">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name">
          <div id="nameHelp" class="form-text">Nombre para la partida.</div>
        </div>
        <div class="mb-3">
         <h3>Participantes</h3>
         @foreach ($users as $user)
         <span class="m-3">
          <input type="checkbox" name="participants[]" id="user{{$user->id}}" value="{{$user->id}}">
          <label for="user{{$user->id}}">{{$user->name}}</label>
         </span>
         @endforeach
       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
