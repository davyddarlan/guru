<?php

namespace App\Http\Controllers\Cladograma;

use App\SubClasse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subclasses = SubClasse::all();
        
        return view('cladograma/subclasse/index', [
            'subclasses' => $subclasses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cladograma/subclasse/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubClasse::create([
            'subclasse' => $request->subclasse
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubClasse  $subClasse
     * @return \Illuminate\Http\Response
     */
    public function show(SubClasse $subClasse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubClasse  $subClasse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subclasse = SubClasse::find($id);
        
        return view('cladograma/subclasse/edit', [
            'subclasse' => $subclasse
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubClasse  $subClasse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subclasse = SubClasse::find($id);
        $subclasse->subclasse = $request->subclasse;
        $subclasse->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubClasse  $subClasse
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubClasse $subClasse)
    {
        //
    }
}
