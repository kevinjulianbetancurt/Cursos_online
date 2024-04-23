<?php

namespace App\Http\Controllers;

use App\Models\Instructores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Intructores = Instructores::all();
        return view('Intructor.index', ['Intructores' => $Intructores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Instructores = DB::table('Instructores')
        ->get();
        return view('Instructor.new', ['Instructores' => $Instructores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Instructor = new Instructores();    
        $Instructor->titulo=$request->título;
        $Instructor->descripción=$request->descripción;
        $Instructor->duración=$request->duración;
        $Instructor->precio=$request->precio;
        $Instructor->categoria=$request->categoría;
        $Instructor->save();

        $Instructores = Instructores::all();

       return view('Instructor.index', ['Instructores'=> $Instructores]);
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
