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
        $instructores = Instructores::all();
        return view('instructor.index', ['instructores' => $instructores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructores = DB::table('instructores')
        ->get();
        return view('instructor.new', ['instructores' => $instructores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instructor = new Instructores();    
        $instructor->nombre=$request->nombre;
        $instructor->apellido=$request->apellido;
        $instructor->especialidad=$request->especialidad;
        $instructor->biografía=$request->biografía;
        $instructor->save();

        $instructores = Instructores::all();

       return view('instructor.index', ['instructores'=> $instructores]);
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
        $instructor = Instructores::find($id);
        $instructores = DB::table('instructores')
        ->get();
        return view('instructor.edit', ['instructor' => $instructor , 'instructores' => $instructores]);
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
        $instructor = Instructores::find($id);    
        $instructor->nombre=$request->nombre;
        $instructor->apellido=$request->apellido;
        $instructor->especialidad=$request->especialidad;
        $instructor->biografía=$request->biografía;
        $instructor->save();

        $instructores = Instructores::all();

        return view('instructor.index', ['instructores'=> $instructores]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructores::find($id);
        $instructor->delete();

        $instructores = Instructores::all();

        return view('instructor.index', ['instructores' => $instructores]);
    }
}
