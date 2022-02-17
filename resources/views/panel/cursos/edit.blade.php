@extends('panel.layouts.layout')
@section('contenido')
    <div class="container mt-5">
        <form action="{{ route('cursos-update', ['id' => $item->id]) }}" method="post">
            @method("PUT")
            @csrf
            @include('panel.cursos.form')
        </form>
    </div>
@endsection
