@extends('layouts.site')

@section('site_title','Lista de Reserva')

@section('content')
  <div class="container">
  <br>
    <h3 class="center">Lista de Reserva</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Data Reserva</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->data_reserva }}</td>
            </tr>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.reservas.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.reservas.deletar',$registro->id) }}">Deletar</a>
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.reservas.adicionar') }}">Adicionar</a>

    </div>

  </div>
  @endsection
