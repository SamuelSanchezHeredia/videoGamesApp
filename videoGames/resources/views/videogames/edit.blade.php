@extends('app.base')

@section('title' ,'Edit Videogame')

@section('content')
<form action="{{ url('videogames/' . $videogame->id) }}" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="put"> == @method('put')-->
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"> == @csrf-->
    @method('put')
    @csrf

    <!-- Inputs del formulario -->

<div class="mb-3">

        <label for="nombre" class="form-label">Videogame name</label>

        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required value="{{ old('nombre', $videogame->nombre) }}">

    </div>
    
    <div class="mb-3">

        <label for="ano_salida" class="form-label">Videogame año salida</label>

        <input type="number" class="form-control" id="ano_salida" name="ano_salida" step="1" min="1990" max="2024" required value="{{ old('ano_salida', $videogame->ano_salida) }}">

    </div>

    <div class="mb-3">

        <label for="compania" class="form-label">Videogame compañia</label>

        <input type="text" class="form-control" id="compania" name="compania" maxlength="50" required value="{{ old('compania', $videogame->compania) }}">

    </div>
    
        <div class="mb-3">

        <label for="genero" class="form-label">Videogame genero</label>

        <input type="text" class="form-control" id="genero" name="genero" maxlength="50" required value="{{ old('genero', $videogame->genero) }}">

    </div>

    <div class="mb-3">

        <label for="plataformas" class="form-label">Videogame plataformas</label>

        <input type="text" class="form-control" id="plataformas" name="plataformas" maxlength="100" value="{{ old('plataformas', $videogame->plataformas) }}">

    </div>
    
        <div class="mb-3">

        <label for="edad_juego" class="form-label">Videogame edad de juego</label>

        <input type="number" class="form-control" id="edad_juego" name="edad_juego" step="1" min="1" max="999" required value="{{ old('edad_juego', $videogame->edad_juego) }}">
    </div>

    <input type="submit" class="btn btn-success" value="Edit">
<a href="{{ url('videogames') }}" class="btn btn-dark">Back</a>
<a class="btn btn-dark" href="{{ url('videogames/' . $videogame->id) }}">link to show</a>

</form>
@endsection