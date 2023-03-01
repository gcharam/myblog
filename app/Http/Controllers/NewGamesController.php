<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class NewGamesController extends Controller
{
    public function creategame(Request $request){
        if ($request-> method() == 'POST'){
            $post = new Game();
            $post->Title = $request->get('Title');
            $post->Description = $request->get('Description');
            $post->ConsoleID = $request->get('ConsoleID');
            $post->KindID = $request->get('KindID');
            if ($post->save()){
                return view('newgame', ['ap' => 'Καταχωρήθηκε Επιτυχώς']);
            }else{
                    return view('newgame', ['ap' => 'Υπήρξε κάποιο σφάλμα']);
                };
            };
            return view('newgame',['ap' =>'']);
    }
}
