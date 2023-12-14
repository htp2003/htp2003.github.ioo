<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $trendingPosts = Post::orderBy('views', 'desc')->limit(10)->get();
        // Nếu không có từ khóa tìm kiếm, hiển thị tất cả bài viết theo thứ tự mới nhất
        if (!$query) {
            $posts = Post::latest()->get();
        } else {
            // Sử dụng Eloquent để tìm kiếm bài viết theo từ khóa trong tiêu đề hoặc nội dung
            $posts = Post::where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%");
            })->get();
        }

        // Truyền kết quả tìm kiếm vào view
        return view('home.search', ['posts' => $posts, 'query' => $query, 'trendingPosts' => $trendingPosts]);
    }
}
