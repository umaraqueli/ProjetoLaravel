@extends('layouts.site')

@section('title_name','Lista de Municipios')

@section('content')
<br>
  <div class="container">
    <h3 class="center">Lista de Municipios</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->nome }}</td>
            </tr>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.municipios.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.municipios.deletar',$registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.municipios.adicionar') }}">Adicionar</a>

    </div>

  </div>
  
  @endsection
