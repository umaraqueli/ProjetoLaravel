@extends('layouts.site')

@section('titulo','Reservas')

@section('content')
  <div class="container">
    <h3 class="center">Editando Reservas</h3>
    <div class="row">
      <form class="" action="{{route('admin.reservas.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.reservas._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
