<?php

namespace Laradex\Http\Controllers;

use Laradex\Ganadero;
use Illuminate\Http\Request;

class GanaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$ganaderos = \DB::table('ganaderos')->get()-> paginate(2);
        //return view('ganaderos.index', \compact ('ganaderos'));

        $ganaderos=Ganadero:: paginate(2);// $books=Book:: paginate(15); separa de 15 en 15 las consultas busca lo que esta en segundo comilla
        return view('ganaderos.index')->with('ganaderos',$ganaderos); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ganaderos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ganadero = new Ganadero();
        $ganadero->RFC = $request->input('RFC');
        $ganadero->nombre = $request->input('nombre');
        $ganadero->apellido_p = $request->input('apellido_p');
        $ganadero->apellido_m = $request->input('apellido_m');
        $ganadero->predio = $request->input('predio');
        $ganadero->save();
        return redirect()->route('ganaderos.index');
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
        $ganadero = ganadero::findOrFail($id);
        return view('ganaderos.edit')->with('ganadero',$ganadero);
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
            "apellido_p" => "required",
            "apellido_m" => "required",
            "RFC" => "required",
            "predio" => "required",
        ]);

        $ganadero = Ganadero::findOrFail($id);
        $ganadero->nombre = $request->nombre;
        $ganadero->apellido_p = $request->apellido_p;
        $ganadero->RFC = $request->RFC;
        $ganadero->predio = $request->predio;
        $ganadero->save();


        return 'saved';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ganadero = Ganadero::findOrFail($id);
        $ganadero-> delete(); 
        //return view('ganaderos.index')->with('ganaderos',$ganaderos);
    }
}
