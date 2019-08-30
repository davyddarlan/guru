<?php

namespace App\Http\Controllers;

use App\Uso;
use Illuminate\Http\Request;

class UsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usos = Uso::all();
        
        return view('uso/index', [
            'usos' => $usos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uso/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Uso::create([
            'uso' => $request->uso
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uso  $uso
     * @return \Illuminate\Http\Response
     */
    public function show(Uso $uso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uso  $uso
     * @return \Illuminate\Http\Response
     */
    public function edit(Uso $uso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uso  $uso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uso $uso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uso  $uso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uso $uso)
    {
        //
    }
}
