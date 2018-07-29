<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
            'body' => request('body')
        ]);

        // Redirect user
        return redirect('/');
    }
}
