@extends('layouts.site')

@section('title_name','Lista de Usuários')

@section('content')
<br>
  <div class="container">
    <h3 class="center">Lista de Usuários</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>E-mail</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->name }}</td>
              <td>{{ $registro->tipo }}</td>
              <td>{{ $registro->email }}</td>

            </tr>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.users.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.users.deletar',$registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.users.adicionar') }}">Adicionar</a>

    </div>

  </div>
  
  @endsection
