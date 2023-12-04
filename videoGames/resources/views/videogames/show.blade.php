@extends('app.base')

@section('title' ,'Videogame')

@section('content')
<div class="table-responsive small">
    
            <table class="table table-striped table-sm">
                <tbody>
                <tr>
                      <td>#</td>
                      <td>{{ $videogame->id }}</td>
                </tr>
                <tr>
                      <td>nombre</td>
                      <td>{{ $videogame->nombre }}</td>
                </tr>
                <tr>
                      <td>ano_salida</td>
                      <td>{{ $videogame->ano_salida }}</td>
                </tr>
                <tr>
                      <td>compania</td>
                      <td>{{ $videogame->compania }}</td>
                </tr>
                <tr>
                      <td>genero</td>
                      <td>{{ $videogame->genero }}</td>
                </tr>
                <tr>
                      <td>plataformas</td>
                      <td>{{ $videogame->plataformas }}</td>
                </tr>
                <tr>
                      <td>edad_juego</td>
                      <td>{{ $videogame->edad_juego }}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{ url('videogames') }}" class="btn btn-dark">Back</a>
            <a class="btn btn-dark" href="{{ url('videogames/' . $videogame->id . '/edit') }}">link to edit</a>
            <a data-url="{{ url('videogames/' . $videogame->id) }}" class="btn-secondary btn hrefDelete" href="">Link to delete</a>
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