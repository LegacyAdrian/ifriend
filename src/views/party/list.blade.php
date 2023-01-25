@extends('master')

@section('title', 'Bienvenido a la lista')

@section('content')
<a href="/party/create" class="btn btn-primary">Crear Partida </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Propietario</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
       @foreach ($parties as $party)
           <tr>
            <th scope="row"> {{$party->id}}</th>
                <td>{{$party->name}}</td>
                <td>{{$party->admin_id}}</td>
                <td>
                <a href="/party/{{$party->id}}" class="btn btn-primary">Mostrar </a>
            </td>
           </tr>
       @endforeach
        </tbody>
@endsection

