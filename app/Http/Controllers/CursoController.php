<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo index por convexion para la pagina principal
    public function index()
    {
        return view('cursos.index');
    }

    //metodo si se creará algo
    public function create()
    {
        return view('cursos.create');
    }

    //metodo si neceistamos mostrar
    public function show($curso)
    {
        compact('curso'); // ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }
}
