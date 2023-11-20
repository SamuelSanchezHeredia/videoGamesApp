@extends('app.base')

@section('title' ,'Create Videogame')

@section('content')
<form action="{{ url('videogames') }}" method="post">

    @csrf

    <div class="mb-3">

        <label for="nombre" class="form-label">Videogame name</label>

        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required value="{{ old('nombre') }}">

    </div>
    
    <div class="mb-3">

        <label for="ano_salida" class="form-label">Videogame año salida</label>

        <input type="number" class="form-control" id="ano_salida" name="ano_salida" step="1" min="1990" max="2023" required value="{{ old('ano_salida') }}">

    </div>

    <div class="mb-3">

        <label for="compania" class="form-label">Videogame compañia</label>

        <input type="text" class="form-control" id="compania" name="compania" maxlength="50" required value="{{ old('compania') }}">

    </div>
    
        <div class="mb-3">

        <label for="genero" class="form-label">Videogame genero</label>

        <input type="text" class="form-control" id="genero" name="genero" maxlength="50" required value="{{ old('genero') }}">

    </div>

    <div class="mb-3">

        <label for="plataformas" class="form-label">Videogame plataformas</label>

        <input type="text" class="form-control" id="plataformas" name="plataformas" maxlength="100" value="{{ old('plataformas') }}">

    </div>
    
        <div class="mb-3">

        <label for="edad_juego" class="form-label">Videogame edad de juego</label>

        <input type="number" class="form-control" id="edad_juego" name="edad_juego" step="1" min="1" max="999" required value="{{ old('edad_juego') }}">

    </div>

    <button type="submit" class="btn btn-success">Create / Insert / Add</button>
<a href="{{ url('videogames') }}" class="btn btn-dark">Back</a>
</form>
@endsection