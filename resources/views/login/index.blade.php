@extends('layouts.site')

@section('site_title','Entrar no sistema')

@section('content')
<br>
  <div class="container">
    <h3 class="center">Logar no Sistema</h3>
  <hr>
    <div class="row">
      <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="text" name="email">
          <label>E-mail</label>
        </div>
        <div class="input-field">
          <input type="password" name="senha">
          <label>Senha</label>
        </div>

        <button class="btn deep-orange">Entrar</button>
      </form>
    </div><br><br><br><br><br><br><br><br><br>
    <hr>
  </div>




@endsection
