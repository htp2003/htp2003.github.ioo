<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $trendingPosts = Post::orderBy('views', 'desc')->limit(10)->get();
        $latestPosts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('posts.show', compact('post', 'trendingPosts', 'latestPosts'));
    }
}
