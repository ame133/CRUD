@extends('layouts.master')
@section('title')
@section('header')

@stop 
@section('navbar')
@show
@section('contenido') 
<div><a href="{{('Tim@nuevo')}}"></a><a href="/nuevouser"> agregar nuevo registro <img src="images/nueva-pagina.png" width="40px"></a>
<br>
{{$status ?? ''}}
</div>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">llave</th>
      <th scope="col">actualizar</th>
      <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $user)
    <tr>
      <th scope="row">{{$user->idUsario}}</th>
      <td>{{$user->user}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->key}}</td>
      <td><a href="{{action('Tim@show', ['id'=> $user->idUsario])}}"><img src="/images/updated.png" width="40px"></a></td>
      <td><a href="{{action('Tim@destroy', ['id'=> $user->idUsario])}}"><img src="/images/remove.png" width="40px"></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@stop
@section('footer')
@parent
@stop
