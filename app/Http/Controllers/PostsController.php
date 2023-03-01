<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Release;
use DB;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function showpost(){
        $posts = Post::latest()->take(3)->get();
        $games = Release::latest()->take(3)->get();
        return view('index', ['posts' => $posts],['games' => $games]);
        

    }

    public function createpost(Request $request)
    {
        if ($request-> method() == 'POST'){
        $post = new POST();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        if ($post->save()){
            return view('newpost', ['ap' => 'Καταχωρήθηκε Επιτυχώς']);
        }else{
                return view('newpost', ['ap' => 'Υπήρξε κάποιο σφάλμα']);
            };
        };
        return view('newpost',['ap' =>'']);
    }

    //delete method
    public function deletepost($id){

        $flight = Post::find($id);
 
        $flight->delete();

        return Redirect::back()->withErrors(['msg' => 'The Message']);



        return $id;
    }

}
