@extends('layouts.site')

@section('titulo','Quartos')

@section('content')
  <div class="container">
    <h3 class="center">Editando Quarto</h3>
    <div class="row">
      <form class="" action="{{route('admin.quartos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.quartos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
