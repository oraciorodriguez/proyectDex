<?php

namespace proyectDex\Http\Controllers;

use proyectDex\Entrenador;
use Illuminate\Http\Request;

class nuevoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ncontrolador = Entrenador::all();
        return view('ncontrolador.index', compact('ncontrolador'));
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ncontrolador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          if ($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                
            }     
        $entrenador = new Entrenador();
         $entrenador->name = $request->input('name');
         $entrenador->avatar = $name;
         $entrenador->save();
          return 'Saved';
        
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
        //
    }
}
