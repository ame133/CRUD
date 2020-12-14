<div>
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HEY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default" style="background-color: black">
  <div class="container">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav" >
      <li class="active" ><a href="{{route('primero')}}" style="background-color: black">SEC1</a></li>
      <li><a href="{{route('dos')}}">SEC2</a></li>
      <li><a href="{{route('tres')}}">SEC3</a></li>
      <li><a href="{{route('cuatro')}}">SEC4</a></li>
      <li><a href="{{route('cinco')}}">SEC5</a></li>
      <li><a href="{{route('seis')}}">DEC1</a></li>
      <li><a href="{{route('siete')}}">DEC2</a></li>
      <li><a href="{{route('ocho')}}">DEC3</a></li>
      <li><a href="{{route('nueve')}}">DEC4</a></li>
      <li><a href="{{route('diez')}}">DEC5</a></li>
      <li><a href="{{action('Tim@ciclo1')}}">CICLO1</a></li>
      <li><a href="{{action('Tim@ciclo2')}}">CICLO2</a></li>
      <li><a href="{{action('Tim@ciclo3')}}">CICLO3</a></li>
    </ul>
  </div>
</nav>
</body>
</html>

</div>
