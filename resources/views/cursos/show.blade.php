@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso {{ $curso->name }} </h1>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <br>
    <p><strong>Categoría: </strong>{{ $curso->category }}</p>
    <p>{{ $curso->description }}</p>
    <a href="{{ route('cursos.index') }}">Volver a curso</a>
@endsection
