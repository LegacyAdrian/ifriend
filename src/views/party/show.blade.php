@extends('master')

@section('content')
<h2>{{$party->name}}</h2>
<div class="row">


<form action="/party/{{$party->id}}" method="POST" class="col">
<input type="hidden" name="_METHOD" value="DELETE">
<input type="submit" value="Borrar" class="btn btn-danger">
</form>
<a href="/party/{{$party->id}}/edit" class="btn btn-primary mb-1 mt-1">Editar</a>
<a href="/party" class="btn btn-primary">Ir a Lista </a>
</div>
@endsection
