<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3', 'unique',
            'email' => 'required|min:10', 'unique',
            'password' => 'required|min:10',
            ]);

        $post = new Post($request->all());

        return back();
    }

    public function show(Post $post)
    {
        #$post->load('post');

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return view('posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        echo "This deletes current post. Not yet implemented";
        #$post->
    }
}
