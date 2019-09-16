<?php

namespace App\Http\Controllers\Cladograma;

use App\SubFamilia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubFamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cladograma/subfamilia/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cladograma/subfamilia/create');
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
     * @param  \App\SubFamilia  $subFamilia
     * @return \Illuminate\Http\Response
     */
    public function show(SubFamilia $subFamilia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubFamilia  $subFamilia
     * @return \Illuminate\Http\Response
     */
    public function edit(SubFamilia $subFamilia)
    {
        return view('cladograma/subfamilia/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubFamilia  $subFamilia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubFamilia $subFamilia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubFamilia  $subFamilia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubFamilia $subFamilia)
    {
        //
    }
}
