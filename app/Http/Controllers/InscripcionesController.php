<?php

namespace App\Http\Controllers;

use App\Models\Inscripciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cursos = Cursos::all();
        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'inscripciones.id_cursos', '=', 'cursos.id_cursos')
        ->select('inscripciones.*',"cursos.id_cursos")

        ->join('instructores', 'inscripciones.id_instructores', '=', 'instructores.id_instructores')
        ->select('inscripciones.*',"instructores.id_instructores")

        ->join('estudiantes', 'inscripciones.id_estudiantes', '=', 'estudiantes.id_estudiantes')
        ->select('inscripciones.*',"estudiantes.id_estudiantes")
        ->get();
        return view('inscripcion.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscripcionescurso = DB::table('cursos')
        ->orderBy('id_cursos')
        ->get();

        $inscripcionesinstructores = DB::table('instructores')
        ->orderBy('id_instructores')
        ->get();

        $inscripcionesestudiantes = DB::table('estudiantes')
        ->orderBy('id_estudiantes')
        ->get();

        
        return view('inscripcion.new', ['inscripcionescurso' => $inscripcionescurso, 
                                        'inscripcionesinstructores' => $inscripcionesinstructores,
                                        'inscripcionesestudiantes' => $inscripcionesestudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripciones();    
        $inscripcion->id_cursos=$request->id_cursos;
        $inscripcion->id_instructores=$request->id_instructores;
        $inscripcion->id_estudiantes=$request->id_estudiantes;
        $inscripcion->fecha_inscripcion=$request->fecha_inscripcion;
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'inscripciones.id_cursos', '=', 'cursos.id_cursos')
        ->select('inscripciones.*',"cursos.id_cursos")

        ->join('instructores', 'inscripciones.id_instructores', '=', 'instructores.id_instructores')
        ->select('inscripciones.*',"instructores.id_instructores")

        ->join('estudiantes', 'inscripciones.id_estudiantes', '=', 'estudiantes.id_estudiantes')
        ->select('inscripciones.*',"estudiantes.id_estudiantes")
        ->get();

       return view('inscripcion.index', ['inscripciones'=> $inscripciones]);
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
        $inscripcion = Inscripciones::find($id);

        $inscripcionescurso = DB::table('cursos')
        ->orderBy('id_cursos')
        ->get();

        $inscripcionesinstructores = DB::table('instructores')
        ->orderBy('id_instructores')
        ->get();

        $inscripcionesestudiantes = DB::table('estudiantes')
        ->orderBy('id_estudiantes')
        ->get();

        
        return view('inscripcion.edit', ['inscripcion'=> $inscripcion,
                                        'inscripcionescurso' => $inscripcionescurso, 
                                        'inscripcionesinstructores' => $inscripcionesinstructores,
                                        'inscripcionesestudiantes' => $inscripcionesestudiantes]);
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
        $inscripcion = Inscripciones::find($id);
        $inscripcion->id_cursos=$request->id_cursos;
        $inscripcion->id_instructores=$request->id_instructores;
        $inscripcion->id_estudiantes=$request->id_estudiantes;
        $inscripcion->fecha_inscripcion=$request->fecha_inscripcion;
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'inscripciones.id_cursos', '=', 'cursos.id_cursos')
        ->select('inscripciones.*',"cursos.id_cursos")

        ->join('instructores', 'inscripciones.id_instructores', '=', 'instructores.id_instructores')
        ->select('inscripciones.*',"instructores.id_instructores")

        ->join('estudiantes', 'inscripciones.id_estudiantes', '=', 'estudiantes.id_estudiantes')
        ->select('inscripciones.*',"estudiantes.id_estudiantes")
        ->get();

        return view('inscripcion.index', ['inscripciones'=> $inscripciones]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscripcion = Inscripciones::find($id);
        $inscripcion->delete();

        $inscripciones = Inscripciones::all();

        return view('inscripcion.index', ['inscripciones' => $inscripciones]);
    }
}
