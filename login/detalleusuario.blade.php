@extends('layouts.master')
@section('title')
@section('header')
<h1>show</h1>
@stop 
@section('navbar')
@show
@section('contenido') 
<div>agregar nuevo registro</div>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">llave</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@section('footer')
@parent
@stop
