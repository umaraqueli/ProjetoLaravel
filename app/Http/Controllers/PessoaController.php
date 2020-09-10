<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $registros = Pessoa::all();
            return view('admin.pessoas.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.pessoas.adicionar');

    }  

        public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Pessoa::create($dados);

      return redirect()->route('admin.pessoas');

    }
    public function editar($id)
    {
      $registro = Pessoa::find($id);
      return view('admin.pessoas.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Pessoa::find($id)->update($dados);

      return redirect()->route('admin.pessoas');
      

    }

    public function deletar($id)
    {
      Pessoa::find($id)->delete();
      return redirect()->route('admin.pessoas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
