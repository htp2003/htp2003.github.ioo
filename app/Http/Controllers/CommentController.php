<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'post_id' => 'required|exists:posts,post_id',
                'body' => 'required|string',
            ]);

            // Insert a new comment into the database
            DB::table('comments')->insert([
                'post_id' => $request->post_id,
                'body' => $request->body,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Return a JSON response with a success message or the new comment data if needed
            return response()->json(['message' => 'Comment added successfully']);
        } else {
            return response()->json(['message' => 'You need to be logged in to leave a comment'], 403);
        }
    }


    public function index(Request $request)
    {
        // Validate request
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        // Get comments for a specific post
        $comments = Comment::where('post_id', $request->post_id)->get();

        // Return a JSON response with the comments
        return response()->json(['comments' => $comments]);
    }
}
