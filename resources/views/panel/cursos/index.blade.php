@extends('panel.layouts.layout')
@section('contenido')
    <div class="container mt-5 ">
        <a href="{{ route('cursos-create') }}" class="btn btn-success mb-3">Nuevo curso</a>


        <table class="table table-striped table-bordered" id="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
        </table>

        <button type="button" id="cambiar">+1</button>
    </div>
    @push('custom-script')

    @endpush
@endsection
