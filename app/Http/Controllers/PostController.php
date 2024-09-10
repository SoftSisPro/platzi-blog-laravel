<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();
        return view('posts.index', compact('posts'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
        //return redirect()->route('posts.index');
    }

}
