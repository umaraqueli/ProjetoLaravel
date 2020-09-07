@extends('layouts.site')

@section('site_title','Lista de Municipios')

@section('content')
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
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.municipios.adicionar') }}">Adicionar</a>

    </div>

  </div>
