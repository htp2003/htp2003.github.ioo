<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        // Tìm category dựa vào tên
        $category = Category::where('name', $category)->first();
        $trendingPosts = Post::orderBy('views', 'desc')->limit(10)->get();



        if ($category) {

            $posts = $category->posts;


            // return view('category.category', ['posts' => $posts, 'category' => $category]);
            return view('category.category', ['posts' => $posts, 'category' => $category, 'trendingPosts' => $trendingPosts]);
        } else {
            echo ('Not found');
        }
    }
}
