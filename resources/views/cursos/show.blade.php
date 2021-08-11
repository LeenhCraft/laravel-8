@extends('layouts.plantilla')

@section('title','Cursos | '.$curso->name)

@section('content')
@if ($categoria)
    <h1>Curso {{$curso}}, de la categoria {{$categoria}}</h1>
@else
    <h1>Curso {{$curso->name}}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
@endif    
@endsection