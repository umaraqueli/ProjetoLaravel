@extends('layouts.site')

@section('title_name','Municipios')

@section('content')
  <div class="container">
    <h3 class="center">Adicionar Municipio</h3>
    <div class="row">
      <form class="" action="{{route('admin.municipios.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.municipios._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection