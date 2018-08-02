<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = \App\Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts', 'archives'));
    }

    public function show($id)
    {
        $post = \App\Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create a new post
        // Save it to the database
        \App\Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        // Redirect user
        return redirect('/');
    }
}
