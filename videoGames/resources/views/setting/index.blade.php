@extends('app.base')

@section('title' ,'Setting')

@section('content')
<form action="{{ url('setting') }}" method="post">
      @method('put')
      @csrf
      
      <div>
        Behaviour after inserting new videogame
      </div>
      <input class="form-check-input" type="radio" id="showVideoGames" name="afterInsert" value="show videogames" @if(session('afterInsert','show videogames') == 'show videogames' ) checked @endif/>
      <label class="form-check-label" for="showVideoGames">
        Show all videogames list
      </label>
      <br>
      <input class="form-check-input" type="radio" id="createVideoGames" name="afterInsert" value="show create form" @if(session('afterInsert','show videogames') == 'show create form')) checked @endif/>
      <label class="form-check-label" for="createVideoGames">
        Show create new videogame form
      </label>
      <br>
      <br>
      <!--
       <input class="form-check-input" type="radio" id="showMovie" name="create2" value="show movies" {{ $checkedList }}/>
      <label class="form-check-label" for="showMovie2">
        Show all movies list
      </label>
      <br>
      <input class="form-check-input" type="radio" id="createMovie" name="create2" value="show create form" {{ $checkedCreate }}/>
      <label class="form-check-label" for="createMovie2">
        Show create new movie form
      </label>
      <br>
      <br>
      -->
      <label for="editMovie">Behaviour after editing new videogame</label>
        
      <select id="afterEdit" id="afterEdit" class="form-select" aria-label="Default select example">
        @foreach ($afterEditOptions as $value => $label)
            <option value="{{ $value }}" {{ $selectedEditOption == $value ? 'selected' : '' }}>{{ $label}}</option>
        @endforeach
      </select>
      <br>
      <br>
      <button type="submit" class="btn btn-primary">Save setting</button>
  </form>
@endsection