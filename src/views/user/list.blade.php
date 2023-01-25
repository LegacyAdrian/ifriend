@extends('master')

@section('title', 'Bienvenido a la lista')

@section('content')
<a href="/user/create" class="btn btn-primary">Crear Usuario </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
       @foreach ($users as $user)
           <tr>
            <th scope="row"> {{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->password}}</td>
                <td>
                <a href="/user/{{$user->id}}" class="btn btn-primary">Lista Usuarios </a>
            </td>
           </tr>
       @endforeach
        </tbody>
@endsection

