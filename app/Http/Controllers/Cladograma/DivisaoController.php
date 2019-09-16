<?php

namespace App\Http\Controllers\Cladograma;

use App\Divisao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisoes = Divisao::all();
        
        return view('cladograma/divisao/index', [
            'divisoes' => $divisoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cladograma/divisao/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Divisao::create([
            'divisao' => $request->divisao
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Divisao  $divisao
     * @return \Illuminate\Http\Response
     */
    public function show(Divisao $divisao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Divisao  $divisao
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisao $divisao)
    {        
        return view('cladograma/divisao/edit', [
            'divisao' => $divisao
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Divisao  $divisao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisao $divisao)
    {
        $divisao->divisao = $request->divisao;
        $divisao->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Divisao  $divisao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisao $divisao)
    {
        //
    }
}
