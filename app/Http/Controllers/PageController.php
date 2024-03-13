<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('category')
            ->latest()
            ->limit(5)
            ->get();

        return view('index', compact('posts'));
    }

}
