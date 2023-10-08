<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = response()->json(Comment::all());
        return $comments;
    }
    public function show($id){
        $comments = response()->json(Comment::find($id));
        return $comments;
    }
    public function destroy($id){
        Comment::find($id)->delete();
    }
    public function store(Request $request){
        $comment = new Comment();
        $comment->tartalom = $request->tartalom;
        $comment->save();
    }
    public function update(Request $request){
        $comment = new Comment();
        $comment->tartalom = $request->tartalom;
        $comment->save();
    }
}
