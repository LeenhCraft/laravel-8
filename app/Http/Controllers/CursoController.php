<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo index por convexion para la pagina principal
    public function index()
    {

        // $cursos=Curso::all();
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    //metodo si se creará algo
    public function create()
    {
        return view('cursos.create');
    }

    //metodo si neceistamos mostrar
    public function show($id, $categoria = null)
    {
        // compact('curso'); es igual a ['curso' => $curso]

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'), compact('categoria'));
    }
}
