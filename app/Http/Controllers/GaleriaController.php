<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
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
        
        return view('galeria/index', [
            'especie' => $especie
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

        return view('galeria/create', [
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
        $path = Storage::disk('public')->put('avatars', $request->fotografia);
        
        $galeria = Galeria::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'localizacao' => $path
        ]);

        $galeria->id_especie = Especie::getIdEspecie();
        $galeria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        //
    }
}
