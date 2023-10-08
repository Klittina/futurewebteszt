<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        $posts = response()->json(Post::All());
        return $posts;
    }
    public function show($id){
        $posts = response()->json(Post::find($id));
        return $posts;
    }
    public function destroy($id){
        Post::find($id)->delete();
    }
    public function store(Request $request){
        $post = new Post();
        $post->posztcim = $request->posztcim;
        $post->tartalom = $request->tartalom;
        $post->save();
    }
    public function update(Request $request){
        $post = new Post();
        $post->posztcim = $request->posztcim;
        $post->tartalom = $request->tartalom;
        $post->save();
    }
}
