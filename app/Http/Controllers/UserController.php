<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return $user;
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->vezeteknev = $request->vezeteknev;
        $user->keresztnev = $request->keresztnev;
        $user->email = $request->email;
        $user->jelszo = $request->jelszo;
        $user->save();
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->vezeteknev = $request->vezeteknev;
        $user->keresztnev = $request->keresztnev;
        $user->email = $request->email;
        $user->jelszo = $request->jelszo;
        $user->save();
    }

    public function myownpost(){
        $user = Auth::user();
        $posts = DB::table('posts')
        ->where("user_id", $user->user_id)
            ->get();
        return $posts;
    }

    public function mycomments(){
        $user = Auth::user();
        $comments = DB::table('comments as c')
        ->join('posts as p', 'c.post_id', '=', 'p.post_id')
        ->join('users as u', 'u.user_id', '=', 'c.user_id')
        ->where('p.user_id', $user->user_id)
        ->get();
        return $comments;
    }

}
