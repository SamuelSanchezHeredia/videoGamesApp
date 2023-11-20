<?php

namespace App\Http\Controllers;

use App\Models\videoGames;
use Illuminate\Http\Request;

class VideoGamesController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $videogame = videoGames::all(); //eloquent
        return view('videogames.index',['videogame' => $videogame]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // 1º Generar objeto para guardar
        $object = new videoGames($request->all());
        
        // 2º Intentar guardar
        try {
            $result = $object->save();
            // 3º Si lo he guardado, volver a 'algún sitio: index, create'
            $afterInsert = session('afterInsert', 'show videogames');
            $target = 'videogames';
            if($afterInsert != 'show videogames') {
                $target = 'videogames/create';
            }
            return redirect($target)->with(['message' => 'The videogame has been saved.']);
            
        } catch(\Exception $e) {
            // 4º Si no lo he guardado, volver a la página anterior con sus datos para volver a rellenar el formulario
            return back()->withInput()->withErrors(['message' => 'The videogame has not been saved.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(videoGames $videogames) {
        return view('videogames.show', ['videogames' =>$videogames]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(videoGames $videogames) {
        return view('videogames.edit', ['videogames' => $videogames]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videoGames $videogames) {
        try {
            $result = $videogames->update($request->all());
            
            $afterEdit = session('afterEdit', 'videogames');
            if($afterEdit == 'videogames') {
                $target = 'videogames';
            } else if($afterEdit == 'edit') {
                $target = 'videogames/' . $videogames->id . '/edit';
            } else {
                $target = 'videogames/' . $videogames->id;
            }
            
            return redirect($target)->with(['message' => 'The videogame has been updated.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The videogame has not been updated.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(videoGames $videogames) {
        try {
            $videogames->delete();
            return redirect('videogames')->with(['message' => 'The videogame has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The videogame has not been deleted.']);
        }
    }
}