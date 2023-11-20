@extends('app.base')

@section('title', 'Videogames List')

@section('content')

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nombre</th>
          <th scope="col">ano_salida</th>
          <th scope="col">compania</th>
          <th scope="col">genero</th>
          <th scope="col">plataformas</th>
          <th scope="col">edad_juego</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($videogame as $videogames)
            <tr>
                <td>{{ $videogames->id }}</td>
                <td>{{ $videogames->nombre }}</td>
                <td>{{ $videogames->ano_salida }}</td>
                <td>{{ $videogames->compania }}</td>
                <td>{{ $videogames->genero }}</td>
                <td>{{ $videogames->plataformas }}</td>
                <td>{{ $videogames->edad_juego }}</td>
                <td>
                    <a class="btn btn-dark" href="{{ url('videogames/' . $videogames->id) }}">link to show</a>
                    <a class="btn btn-dark" href="{{ url('videogames/' . $videogames->id . '/edit') }}">link to edit</a>
                    <a data-url="{{ url('videogames/' . $videogames->id) }}" class="btn-secondary btn hrefDelete" href="">Link to delete</a>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn-info btn" href="{{ url('videogames/create') }}">link to create</a>
    <form id="formDeleteV2" action="{{ url('videogames/16') }}" method="post">
      @csrf
      @method('delete')
    </form>
</div>

<script>

  //solucion 2
  const ahrefs = document.querySelectorAll(".hrefDelete");
  const formDelete = document.getElementById('formDeleteV2');
  ahrefs.forEach(function(ahref) {
      ahref.onclick = (event) => {
        event.preventDefault();
        if(confirm('¿Seguro?')) {
          let url = event.target.dataset.url;
          formDelete.action = url;
          formDelete.submit();
        }
      };
  });
</script>
@endsection
