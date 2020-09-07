@extends('layouts.site')

@section('site_title', 'Hotels')

@section('content')

<div class="slider">
<ul class="slides">
<li><img src="{!! asset('img/hotel1.jpg')!!}">
<div class="caption center-align">
          <h3 class="light grey-text text-lighten-7">As melhores vistas</h3>
          <h5 class="light grey-text text-lighten-3">Com os melhores preços.</h5>
        </div></li>
<li><img src="{!! asset('img/hotel2.jpg')!!}"></li>
<li><img src="{!! asset('img/hotel3.jpg')!!}"></li>
<li><img src="{!! asset('img/hotel4.jpg')!!}">
<div class="caption center-align">
          <h3>As melhores instalações</h3>
          <h5 class="light grey-text text-lighten-7">Com os melhores preços.</h5>
        </div>
</li>

  </div>
  <div class="col s1">
    <h2 class="header"></h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="{!! asset('img/card2.jpg')!!}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Instalações luxosas para atender ao mais exigentes gostos.</p>
        </div>
        <div class="card-action">
          <a href="{{route('site.login')}}">Faça sua reserva!</a>
        </div>
      </div>
    </div>
  </div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="js/app.js">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        </script>
      
@endsection
