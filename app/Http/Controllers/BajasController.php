<?php

namespace Laradex\Http\Controllers;

use Illuminate\Http\Request;
use Laradex\Baja;
use Laradex\Vaca;

class BajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bajas=Baja:: paginate(2);// $books=Book:: paginate(15); separa de 15 en 15 las consultas busca lo que esta en segundo comilla
        return view('bajas.index')->with('bajas',$bajas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacas=Vaca:: paginate(2);// $books=Book:: paginate(15); separa de 15 en 15 las consultas busca lo que esta en segundo comilla
        return view('bajas.create')->with('vacas',$vacas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baja = new Baja();
        $baja->id_vaca = $request->input('id_vaca');
        $baja->fecha_baja = $request->input('fecha_baja');
        $baja->causa= $request->input('causa');
        $baja->id_enfermedad = $request->input('id_enfermedad');
        $baja->save();
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
        //
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
        //
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

    public function del(){
        return 'hola';
    }
}
