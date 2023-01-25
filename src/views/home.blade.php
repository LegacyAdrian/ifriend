@extends('master')

@section('title', 'Bienvenido a Ifriend')

@section('content')
    <h2>Tu gestor de amigo invisible</h2>
    @isset($_SESSION['id'])
    <a href="/user" class="btn btn-primary">Lista Usuarios </a>
    @endisset

@endsection
