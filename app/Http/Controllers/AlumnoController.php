<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        $campos = $alumnos[0]->getAttributes();
        $campos = array_keys($campos);
        //dd($campos);
        $campos = json_encode($campos);
        $alumnos = json_encode($alumnos);
        return view("alumnos/alumnos", ["alumnos" => $alumnos, "campos" => $campos, "nombre" => "Alumnos"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
        $alumno = new Alumno($request->input());
        $alumno->saveOrFail();

        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
        return view("alumnos.edit", ["alumno" => $alumno]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumnoRequest  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
        $valores = $request->input();
        $alumno->update($valores);
        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);
    }
}
