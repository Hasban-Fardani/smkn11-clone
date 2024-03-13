<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(9);
        return view('index', compact('posts'));
    }
}
