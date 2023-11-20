<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\País;


class SettingController extends Controller
{
    public function index(){
        $checkedList = '';
        $checkedCreate = '';

        $afterInsert =  session('afterInsert','show videogames');
        if($afterInsert == 'show videogames') {
            $checkedList = 'checked';
        }else {
            $checkedCreate = 'checked';
        }
        $afterEdit = session('afterEdit','videogames');
        $afterEditOptions = [
            'edit' => 'Show edit videogame form',
            'movie' => 'Show all videogames list',
            'show' => 'Show videogame',
            ];
        return view('setting.index',['checkedList' => $checkedList,'checkedCreate' => $checkedCreate,
        'afterEditOptions' => $afterEditOptions, 'selectedEditOption' => $afterEdit] );
        
        
    }
    

    
    public function update(Request $request){
        session(['afterInsert'=>$request->afterInsert,'afterEdit'=>$request->afterEdit]);
        
        return redirect('videogames')->with(['message' => 'The setting have been updated']);
    }
    
}
