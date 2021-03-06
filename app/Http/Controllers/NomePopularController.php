<?php

namespace App\Http\Controllers;

use App\NomePopular;
use App\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class NomePopularController extends Controller
{   
    public function __construct()
    {
        $this->middleware('id.especie');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $especie = Especie::getEspecie();
        
        return view('nome-popular/index', [
            'especie' => $especie,
            'nomes_populares' => $especie->nomesPopulares
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $especie = Especie::getEspecie();
        
        return view('nome-popular/create', [
            'especie' => $especie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nomePopular = NomePopular::create([
            'nome_popular' => $request->nome_popular
        ]);

        $nomePopular->id_especie = Especie::getIdEspecie();
        $nomePopular->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NomePopular  $nomePopular
     * @return \Illuminate\Http\Response
     */
    public function show(NomePopular $nomePopular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NomePopular  $nomePopular
     * @return \Illuminate\Http\Response
     */
    public function edit(NomePopular $nomePopular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NomePopular  $nomePopular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NomePopular $nomePopular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NomePopular  $nomePopular
     * @return \Illuminate\Http\Response
     */
    public function destroy(NomePopular $nomePopular)
    {
        //
    }
}
