<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Release;

class ReleasesController extends Controller
{
    public function createRelease(Request $request)
    {
       
        /* $game = new Release();
        $game->title = $request->get('title');
        $game->body = $request->get('body');
        if ($game->save()){
            return view('latest', ['ap' => 'Καταχωρήθηκε Επιτυχώς']);
        }else{
                return view('latest', ['ap' => 'Υπήρξε κάποιο σφάλμα']);
            };
        }; */
        return view('latest');
    

   }

   public function submit_latest (Request $request){

    $validated = $request->validate([
        'title' => 'required|max:255',
    ]);
   
    $game = new Release;
    $game->title = $request->title;
    $game->body = $request->body;
    $game->save();

    return redirect ('/admin/latest')->with('message' , 'Your new appointment submited succesfully. Please wait to aprove from administartor!');
   
}

}
