<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view("alumnos", ['alumnos'=> $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        // Creamos un alumno a partir d los datos del formulario
        $alumno = new Alumno ($request->input());
        // Guardamos
        $alumno->saveOrFail();

        //Redirigimos a alumnos
        return redirect(route("alumnos.index"));

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view("edit", ["alumno"=> $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //valores del nuevo alumno
        $valores = $request->input();
        //actualizamos el alumno con los nuevos valores
        $alumno->update($valores);
        //Redirigimos a alumnos para que vuelva a cargar todos los alumnos con todos los campos
        return redirect(route("alumnos.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::all();
        //return ["alumnos"=> $alumnos];
        //return view("alumnos", ["alumnos"=> $alumnos]);
        //Redirigimos a alumnos
        return redirect(route("alumnos.index"));
    }
}
