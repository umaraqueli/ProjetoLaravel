@extends('layouts.site')

@section('titulo','Hotels')

@section('content')
  <div class="container">
    <h3 class="center">Editando Hotel</h3>
    <div class="row">
      <form class="" action="{{route('admin.hotels.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.hotels._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
