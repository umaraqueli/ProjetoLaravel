<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $registros = Municipio::all();
            return view('admin.municipios.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.municipios.adicionar');
    }
    
    public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Municipio::create($dados);

      return redirect()->route('admin.municipios');

    }
    public function editar($id)
    {
      $registro = Municipio::find($id);
      return view('admin.municipios.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Muncipio::find($id)->update($dados);

      return redirect()->route('admin.municipios');

    }

    public function deletar($id)
    {
      Municipio::find($id)->delete();
      return redirect()->route('admin.municipios');
    }


}