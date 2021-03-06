@extends('layout')

@section('title', "Registrarse")
 
@section('content')
 
    <h2>Registrarse</h2>

    {{--Sección de errores--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Error en la creación del usuario:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Sección de formulario--}}
    <form method="POST" action="{{ route('register_send') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
 
        <div class="form-group">
            <label for="password">Clave:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirmar clave:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
 
@endsection