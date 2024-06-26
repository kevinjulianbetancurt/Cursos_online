<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::all();
        return view('curso.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = DB::table('cursos')
        ->get();
        return view('curso.new', ['cursos' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Cursos();    
        $curso->titulo=$request->título;
        $curso->descripción=$request->descripción;
        $curso->duración=$request->duración;
        $curso->precio=$request->precio;
        $curso->categoria=$request->categoría;
        $curso->save();

        $cursos = Cursos::all();

       return view('curso.index', ['cursos'=> $cursos]);
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
        $curso = Cursos::find($id);
        $cursos = DB::table('cursos')
        ->get();
        return view('curso.edit', ['curso' => $curso , 'cursos' => $cursos]);
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
        $curso = Cursos::find($id);   
        $curso->titulo=$request->título;
        $curso->descripción=$request->descripción;
        $curso->duración=$request->duración;
        $curso->precio=$request->precio;
        $curso->categoria=$request->categoría;
        $curso->save();

        $cursos = Cursos::all();

        return view('curso.index', ['cursos'=> $cursos]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Cursos::find($id);
        $curso->delete();

        $cursos = Cursos::all();

        return view('curso.index', ['cursos' => $cursos]);
    }
}
