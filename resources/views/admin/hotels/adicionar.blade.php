@extends('layouts.site')

@section('title_name','Hotels')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Adicionar Hotel</h3>
    <div class="row">
      <form class="" action="{{route('admin.hotels.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.hotels._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
