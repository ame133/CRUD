@extends('layouts.master')
@section('title')
@section('header')
@if((isset($usuarios)) and (is_object($usuarios)))
  Modificacion de datos de usuario
  @php
  $user = $usuarios ->user;
  $password = $usuarios ->password;
  $key = $usuarios ->key;
  $idUsario = $usuarios ->idUsario;
  @endphp
  @else
  alta de un nuevo usuario
  @php
  $user = '';
  $password = '';
  $key = '';
  $idUsario = '';
  @endif
@stop 
@section('navbar')
@show
@section('contenido') 

<hr>
<form action="{{isset($usuarios) ? action('Tim@update') : action('Tim@save')}}" method="get">
{{csrf_field()}}
@if((isset($usuarios)) and (is_object($usuarios)))
<input type="hidden" name="id" value="{{$idUsario}}">
@endif
<label for="user">Usuario</label>
<input type="text" name="usuario" value="{{$user}}">
<br>
<label for="password">Password</label>
<input type="password" name="clave" value="{{$password}}">
<br>
<label for="key">Key</label>
<input type="text" name="llave" value="{{$key}}">
<br>
<input type="submit" value="submit">
@stop
@section('footer')
@parent
@stop
