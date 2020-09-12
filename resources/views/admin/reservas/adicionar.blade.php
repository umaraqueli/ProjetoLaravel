@extends('layouts.site')

@section('title_name','Reservas')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Efetuar Reserva</h3>
    <div class="row">
      <form class="" action="{{route('admin.reservas.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.reservas._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
