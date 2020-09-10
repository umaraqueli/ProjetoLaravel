@extends('layouts.site')

@section('title_name','Lista de Pessoas')

@section('content')
<br>
  <div class="container">
    <h3 class="center">Lista de Pessoas</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->sobrenome }}</td>
            </tr>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.pessoas.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.pessoas.deletar',$registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.pessoas.adicionar') }}">Adicionar</a>

    </div>

  </div>
  
  @endsection
