<?php

namespace Laradex\Http\Controllers;

use Laradex\Vaca;
use Illuminate\Http\Request;

class VacasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacas=Vaca:: paginate(2);// $books=Book:: paginate(15); separa de 15 en 15 las consultas busca lo que esta en segundo comilla
        return view('vacas.index')->with('vacas',$vacas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaca = new Vaca();
        $vaca->nombre = $request->input('nombre');
        $vaca->raza = $request->input('raza');
        $vaca->origen= $request->input('origen');
        $vaca->fecha_inc = $request->input('fecha_inc');
        $vaca->fecha_nac = $request->input('fecha_nac');
        $vaca->edad = $request->input('edad');
        $vaca->estatus = $request->input('estatus');
        $vaca->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaca = vaca::findOrFail($id);
        return view('vacas.edit')->with('vaca',$vaca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required",
            "raza" => "required",
            "origen" => "required",
            "fecha_inc" => "required",
            "fecha_nac" => "required",
            "edad" => "required",
            "estatus" => "required",
        ]);

        $vaca = Vaca::findOrFail($id);
        $vaca->nombre = $request->nombre;
        $vaca->raza = $request->raza;
        $vaca->origen = $request->origen;
        $vaca->fecha_inc = $request->fecha_inc;
        $vaca->fecha_nac = $request->fecha_nac;
        $vaca->edad = $request->edad;
        $vaca->estatus = $request->estatus;

        $vaca->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaca = Vaca::findOrFail($id);
        $vaca-> delete(); 
    }
}
