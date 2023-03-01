<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ShowKindsController extends Controller
{
    public function showkind($Kind,$KindID){
        $kinds = Game::where('KindID',$KindID)->get();
        return view('showkind',['kinds'=>$kinds],['Kind'=>$Kind]);
    }
}
