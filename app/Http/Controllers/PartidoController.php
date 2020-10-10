<?php

namespace App\Http\Controllers;

use App\Partido;
use App\Jugador;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos = Partido::All();
        $jugadores = Jugador::All();

        return view('partidos')->with('partidos', $partidos)->with('jugadores', $jugadores);

        //return view('partidos');
        //return response()->json(["data" => $partidos]);

    }

    public function getAll(){
        $partidos = Partido::All();

        return response()->json(['data'=> $partidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request; */
        Partido::create($request->all());
        return response()->json(["message" => "Partido Creado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        return $partido;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        return response()->json($partido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //return $request . ' ' . $partido;
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido, $id,Response $response)
    {
        //$findPartido = Partido::where('id', $id)->first();
        $findPartido = Partido::find($id);
        if($findPartido){
            $findPartido->delete();
            $data = [ 'message' => 'sucesss'];
        } else {
            $data = [ 'message' => 'error'];
        }
        /* $partido = Partido::find($id)->delete();
        if($partido){
            $data = [

            ]
        } */
        //return $partidoDelete;
        //$partido->delete();
        return $data;
        //return response()->json(['message'=> 'partido deleted']);
    }
}
