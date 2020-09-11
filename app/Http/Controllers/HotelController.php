<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Municipio;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $registros = Hotel::all();
            return view('admin.hotels.index',compact('registros'));
    }

    public function adicionar()
    {
      $municipios = Municipio::all();
      return view('admin.hotels.adicionar',compact('municipios'));
    }
    
    
    public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Hotel::create($dados);

      return redirect()->route('admin.hotels');

    }
    public function editar($id)
    {
      $registro = Hotel::find($id);
      $municipios = Municipio::all();
      return view('admin.hotels.editar',compact('registro','municipios'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Hotel::find($id)->update($dados);

      return redirect()->route('admin.hotels');

    }

    public function deletar($id)
    {
      Hotel::find($id)->delete();
      return redirect()->route('admin.hotels');
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
  
  }
