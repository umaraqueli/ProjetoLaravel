@extends('layouts.site')

@section('title_name','Quartos')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Adicionar Quarto</h3>
    <div class="row">
      <form class="" action="{{route('admin.quartos.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.quartos._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
