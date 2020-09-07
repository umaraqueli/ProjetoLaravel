@extends('layouts.site')

@section('site_title','Lista de Hotel')

@section('content')
  <div class="container">
    <h3 class="center">Lista de Hotel</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Localidade</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->localidade }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.hotels.adicionar') }}">Adicionar</a>

    </div>

  </div>
