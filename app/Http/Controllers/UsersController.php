<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['admin']]);
    }

    public function show(User $user)
    {
        $posts = $user->posts()->get();

        $comments = $user->posts()->get();

        return view('user.index', compact('posts','comments', 'user'));
    }

    public function admin()
    {
        return view('admin.index');
    }
}
