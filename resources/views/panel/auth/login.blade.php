@extends('panel.layouts.layout')
@section('contenido')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @method("POST")
                @csrf
                <label class="form-label">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" name="user_name" class="form-control" value="{{ old('user_name') }}" placeholder="Username">
                </div>
                {{ showErrors($errors->get('user_name')) }}
                <label class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control"
                        placeholder="Password">
                </div>
                {{ showErrors($errors->get('password')) }}
                <button type="submit" class="btn btn-primary mt-3">Iniciar sesión</button>
            </form>
        </div>
    </div>
@endsection
