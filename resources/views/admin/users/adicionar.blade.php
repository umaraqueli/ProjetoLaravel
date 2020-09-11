@extends('layouts.site')

@section('title_name','Usuarios')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Adicionar Usuários </h3>
    <div class="row">
      <form class="" action="{{route('admin.users.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.users._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection