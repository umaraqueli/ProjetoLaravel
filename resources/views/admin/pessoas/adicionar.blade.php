@extends('layouts.site')

@section('title_name','Pessoas')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Adicionar Pessoas </h3>
    <div class="row">
      <form class="" action="{{route('admin.pessoas.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.pessoas._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection