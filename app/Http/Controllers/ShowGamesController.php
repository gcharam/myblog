<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;

class ShowGamesController extends Controller
{
    public function showgame($Console){
        $games = DB::table('games')->join('consoles',function (JoinClause $join) use($Console) {
        $join->on('games.ConsoleID', '=', 'consoles.id')->where('consoles.Slug', '=', $Console);
    })
    ->get();
    
        return view('showgame',['games'=>$games]);
    }
}
