@extends('app.base')

@section('title' ,'Videogame')

@section('content')
<div class="table-responsive small">
    
            <table class="table table-striped table-sm">
                <tbody>
                <tr>
                      <td>#</td>
                      <td>{{ $videogames->id }}</td>
                </tr>
                <tr>
                      <td>nombre</td>
                      <td>{{ $videogames->nombre }}</td>
                </tr>
                <tr>
                      <td>ano_salida</td>
                      <td>{{ $videogames->ano_salida }}</td>
                </tr>
                <tr>
                      <td>compania</td>
                      <td>{{ $videogames->compania }}</td>
                </tr>
                <tr>
                      <td>genero</td>
                      <td>{{ $videogames->genero }}</td>
                </tr>
                <tr>
                      <td>plataformas</td>
                      <td>{{ $videogames->plataformas }}</td>
                </tr>
                <tr>
                      <td>edad_juego</td>
                      <td>{{ $videogames->edad_juego }}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{ url('videogames') }}" class="btn btn-dark">Back</a>
          </div>
@endsection