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
            'title' => 'required|max:150',
            'slug'  => "required|unique:posts,slug",
            'body'  => 'required'
        ]);

        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'slug'  => $request->slug,
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
            'title' => 'required|max:150',
            'slug'  => "required|unique:posts,slug, {$post->id}",
            'body'  => 'required'
        ]);

        $post->update([
            'title' => $request->title,
            'slug'  => $request->slug,
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
