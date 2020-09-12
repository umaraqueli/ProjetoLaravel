<?php

namespace App\Http\Controllers;

use App\Quarto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;


class QuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $registros = Quarto::all();
            return view('admin.quartos.index',compact('registros'));
    }

    public function adicionar()
    {
      $hotels = Hotel::all();
      return view('admin.quartos.adicionar',compact('hotels'));
    }
    
    
    public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Quarto::create($dados);

      return redirect()->route('admin.quartos');

    }
    public function editar($id)
    {
      $registro = Quarto::find($id);
      $hotels = Hotel::all();
      return view('admin.quartos.editar',compact('registro','hotels'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Quarto::find($id)->update($dados);

      return redirect()->route('admin.quartos');
    }

    public function deletar($id)
    {
      Quarto::find($id)->delete();
      return redirect()->route('admin.quartos');
    }}