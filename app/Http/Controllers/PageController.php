<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function blog()
    {
        //$posts = Post::all(); //Obtener todos los post
        //$posts = Post::get(); //Obtener todos los post
        //$posts = Post::orderBy('id', 'DESC')->get(); //Obtener todos los post
        
        $posts = Post::latest()->paginate(); //Obtener todos los post


        //dd($posts); //Imprimir en pantalla
        return view('blog', ['posts'=>$posts]);
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }
}
