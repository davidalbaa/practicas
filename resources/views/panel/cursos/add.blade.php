@extends('panel.layouts.layout')
@section('contenido')
    <div class="container mt-5">
        <form action="{{ route('cursos-store') }}" method="post">
            @method("POST")
            @csrf
            @include('panel.cursos.form')
        </form>
    </div>
@endsection
