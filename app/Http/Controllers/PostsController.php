<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use App\Comment;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

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

    public function create()
    {
        return view('posts.new');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:1',
            'title' => 'required|min:1'
            ]);

        $comment = new Post($request->all());
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect('/posts');
    }

    public function show(Post $post)
    {

        $comments = $post->comments()->get();

        return view('posts.show', compact('post', 'comments'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        $comments = $post->comments()->get();

        return view('posts.show', compact('post', 'comments'));
    }

    public function destroy(Post $post)
    {
        return "This deletes current post. Not yet implemented";
    }
}
