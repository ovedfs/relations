<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(4);
        $posts = $user->posts()->get();
        //dd($posts);
        $posts = Post::with(['creator.user', 'category', 'tags'])->paginate(10);
        //$posts = Post::paginate(10);
        
        return view('welcome', compact('posts'));
        //return response()->json($posts);
    }
}
