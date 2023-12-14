<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy danh sách các bài viết từ bảng posts
        $posts = Post::all();
        $trendingPosts = Post::orderBy('views', 'desc')->limit(10)->get();


        // Truyền danh sách bài viết đến view 'home' để hiển thị
        return view('home', compact('posts', 'trendingPosts'));
    }
}
