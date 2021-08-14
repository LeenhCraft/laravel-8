<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo index por convexion para la pagina principal
    public function index()
    {

        // $cursos=Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    //metodo si se creará algo
    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    /*metodo si necesitamos mostrar, con la primera forma de 
    recuperar los datos de un registro*/
    public function show($id)
    {
        // compact('curso'); es igual a ['curso' => $curso]

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    /*Metodo 2 para recuperar un registro*/
    public function edit(Curso $curso)
    {
        // $curso = Curso::find($id);
        // return $curso;
        return view('cursos.edit', ['curso' => $curso]);
    }

    public function update(Curso $curso, Request $request)
    {
        /*VALIDACION
        forma 2 de hacer una validación */
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'categoria' => 'required'
            ]
        );
        /*END_VALIDACION */

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        /*ASIGNACION MASIVA */
        $curso->update($request->all());
        /*END_ASIGNACION MASIVA */

        return redirect()->route('cursos.show', $curso);
    }
}
