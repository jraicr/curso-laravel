@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1> Bienvenido a la página de cursos </h1>
    <a href="{{route('cursos.create')}}">Crea curso</a>

    @foreach ($cursos as $curso)
        <ul>
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{ $curso->name }}</a>
            </li>
        </ul>
    @endforeach

    {{$cursos->links()}}
@endsection
