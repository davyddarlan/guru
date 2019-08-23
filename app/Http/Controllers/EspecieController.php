<?php

namespace App\Http\Controllers;

use App\Especie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EspecieController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especies = Especie::all();

        return view('especie/index', [
            'especies' => $especies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especie/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Especie::create([
            'nome_cientifico' => $request->nome_cientifico,
            'descobridor' => $request->descobridor,
            'data_descoberta' => $request->data_descoberta,
            'estado_conservacao' => $request->estado_conservacao,
            'codigo_internacional_especie' => $request->codigo_internacional_especie
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show(Especie $especie)
    {        
        $view = view('especie/show', [
            'especie' => $especie
        ]);

        $response = new Response($view);

        $response->withCookie(cookie(env('ID_ESPECIE', ''), $especie->id, 1440));
        
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function edit(Especie $especie)
    {
        return view('especie/edit', [
            'especie' => $especie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especie $especie)
    {
        $especie->nome_cientifico = $request->nome_cientifico;
        $especie->descobridor = $request->descobridor;
        $especie->data_descoberta = $request->data_descoberta;
        $especie->estado_conservacao = $request->estado_conservacao;
        $especie->codigo_internacional_especie = $request->codigo_internacional_especie;

        $especie->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especie $especie)
    {
        $especie->delete();
    }
}
