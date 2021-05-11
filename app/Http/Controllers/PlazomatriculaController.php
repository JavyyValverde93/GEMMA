<?php

namespace App\Http\Controllers;

use App\Models\Plazomatricula;
use Illuminate\Http\Request;

class PlazomatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required'
        ]);

        try{
            $plazomatricula = new Plazomatricula();
            $plazomatricula->nombre = $request->nombre;
            $plazomatricula->fecha = $request->fecha->getTimestamp();

            $plazomatricula->save();

            return back()->with('mensaje', 'Plazo creado correctamente');

        }catch(\Exception $ex){
            return back()->with('error', 'No se ha podido crear el nuevo plazo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plazomatricula  $plazomatricula
     * @return \Illuminate\Http\Response
     */
    public function show(Plazomatricula $plazomatricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plazomatricula  $plazomatricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Plazomatricula $plazomatricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plazomatricula  $plazomatricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plazomatricula $plazomatricula)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required'
        ]);

        try{
            $plazomatricula->nombre = $request->nombre;
            $plazomatricula->fecha = $request->fecha->getTimestamp();

            $plazomatricula->save();

            return back()->with('mensaje', 'Plazo modificado correctamente');

        }catch(\Exception $ex){
            return back()->with('error', 'No se ha podido modificar el plazo');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plazomatricula  $plazomatricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plazomatricula $plazomatricula)
    {
        //
    }
}
