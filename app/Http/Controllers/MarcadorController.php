<?php

namespace App\Http\Controllers;

use App\Marcador;
use Illuminate\Http\Request;

class MarcadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcadores = Marcador::all();
        
        return view('marcador/index', [
            'marcadores' => $marcadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marcador/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Marcador::create([
            'marcador' => $request->marcador,
            'descricao' => $request->descricao
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcador  $marcador
     * @return \Illuminate\Http\Response
     */
    public function show(Marcador $marcador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marcador  $marcador
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcador $marcador)
    {        
        return view('marcador/edit', [
            'marcador' => $marcador
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcador  $marcador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcador $marcador)
    {
        $marcador->marcador = $request->marcador;
        $marcador->descricao = $request->descricao;
        $marcador->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcador  $marcador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcador $marcador)
    {
        //
    }
}
