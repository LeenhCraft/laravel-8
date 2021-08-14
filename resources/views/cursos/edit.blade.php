@extends('layouts.plantilla')

@section('title','Cursos | Edit')

@section('content')
    <h1>pagina para editar curso</h1>

    <form action="{{ route('cursos.update',$curso) }}" method="POST">

        @csrf

        {{-- @method sirve para especificar que el metodo PUT es de actualización
            ya que form solo reconoce dos metodos, get y post
             --}}
        @method('put')

        <label>
            Nombre
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción
            <br>
            <textarea name="description" rows="5" >{{old('description',$curso->description)}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror 
        <br>
        <button type="submit">Actualizar Form</button>     
    </form>
@endsection
