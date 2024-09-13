<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        //- Obtener todos los post
        //$posts = Post::latest()->paginate();
        //- Con el buscador
        $posts = Post::where('title', 'LIKE', "%$search%")
            ->latest()
            ->paginate(10);

        return view("home", ['posts'=>$posts]);
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }
}
