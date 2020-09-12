@extends('layouts.site')

@section('site_title','Lista de Quarto')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Lista de Quarto</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Número Quarto</th>
            <th>Disponível</th>

          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->disponivel }}</td>
            </tr>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.quartos.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.quartos.deletar',$registro->id) }}">Deletar</a>
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.quartos.adicionar') }}">Adicionar</a>

    </div>

  </div>
  @endsection
