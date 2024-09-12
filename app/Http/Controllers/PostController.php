<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug'  => Str::slug($title),
            'body'  => $request->body
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);
        
        $post->update([
            'title' => $title = $request->title,
            'slug'  => Str::slug($title),
            'body'  => $request->body
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
        //return redirect()->route('posts.index');
    }

}
