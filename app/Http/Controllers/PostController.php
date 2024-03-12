<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(9);
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
