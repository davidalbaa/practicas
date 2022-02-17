@extends('panel.layouts.layout')
@section('contenido')
    
    <div class="container mt-5">
        <form action="{{ route('cursos-destroy', ['id' => $item->id]) }}" method="post">
            @method("DELETE")
            @csrf
            <div class="alert alert-danger" role="alert">
                ¿Deseas eliminar este curso?
                <p>Nombre del curso: <strong> {{ $item->name }}</strong></p>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </form>
    </div>
@endsection
