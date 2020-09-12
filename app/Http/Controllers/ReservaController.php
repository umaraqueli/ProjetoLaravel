<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quarto;
use App\Pessoa;
use Illuminate\Support\Facades\Auth;
use App\User;


class ReservaController extends Controller
{
    public function index()
    {
            if (Auth::user()->tipo =='admin'){
            $registros = Reserva::all();
            }else{
            $registros = Reserva::where('user_id', Auth::id())->get();}
            return view('admin.reservas.index',compact('registros'));
    }

    public function adicionar()
    {
      $quartos = Quarto::all();
      $pessoas = Pessoa::all();
      return view('admin.reservas.adicionar',compact('quartos','pessoas'));
    }
    
    
    public function salvar(Request $req)
    {
      $dados = $req->all();
      $dados['user_id'] = Auth::id();
      Reserva::create($dados);

      return redirect()->route('admin.reservas');

    }
    public function editar($id)
    {
      $registro = Reserva::find($id);
      $pessoas = Pessoa::find($id);
      $quartos = Quarto::all();
      return view('admin.reservas.editar',compact('registro','pessoas','quartos'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Reserva::find($id)->update($dados);

      return redirect()->route('admin.reservas');

    }

    public function deletar($id)
    {
      Reserva::find($id)->delete();
      return redirect()->route('admin.reservas');
    }







}
