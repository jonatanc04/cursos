<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = array(
            array("nombre" => "Desarrollo de Aplicaciones Web",
            "curso" => "1º y 2º"),
            array("nombre" => "Desarrollo de Aplicaciones Multiplataforma",
            "curso" => "1º y 2º"),
            array("nombre" => "Administración de Sistemas Informáticos en Red",
            "curso" => "1º y 2º"),
            array("nombre" => "Estética Integral y Bienestar",
            "curso" => "1º y 2º")
        );
        return view('cursos.index', compact('cursos'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensaje = "Formulario de inserción de cursos";
        return view('cursos.create', compact('mensaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = array(
            array("nombre" => "Desarrollo de Aplicaciones Web",
            "curso" => "1º y 2º"),
            array("nombre" => "Desarrollo de Aplicaciones Multiplataforma",
            "curso" => "1º y 2º"),
            array("nombre" => "Administración de Sistemas Informáticos en Red",
            "curso" => "1º y 2º"),
            array("nombre" => "Estética Integral y Bienestar",
            "curso" => "1º y 2º")
        );

        $curso = $cursos[$id];
        return view('cursos.show', compact('curso', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = "Formulario de edición de cursos";
        return view('cursos.edit', compact('mensaje'));
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
