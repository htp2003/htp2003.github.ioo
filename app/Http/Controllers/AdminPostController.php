<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.create-post', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->title = $request->input('postTitle');
        $post->content = $request->input('postContent');
        $post->image = $request->input('image');
        $post->save();

        // Attach category to the post (post_categories table)
        $category_id = $request->input('category_id');
        $post->categories()->attach($category_id);

        // Redirect or return a response
        return redirect()->route('admin.dashboard')->with('success', 'Post created successfully');
    }

    public function managePosts()
    {
        $posts = Post::all();

        return view('admin.manage-posts', compact('posts'));
    }

    public function edit($post)
    {

        $postModel = Post::findOrFail($post);
        $categories = Category::all();

        // Pass the post and categories to the view
        return view('admin.edit-post', ['post' => $postModel, 'categories' => $categories]);
    }


    public function update(Request $request, $post_id)
    {
        try {
            // Validate the request data
            $request->validate([
                'postTitle' => 'required',
                'postContent' => 'required',
                'image' => 'required',
                'category_id' => 'required',
            ]);

            // Get the post by ID
            $post = Post::findOrFail($post_id);

            // Update the post
            $post->update([
                'title' => $request->input('postTitle'),
                'content' => $request->input('postContent'),
                'image' => $request->input('image'),
            ]);

            // Update the attached category
            $category_id = $request->input('category_id');
            $post->categories()->sync([$category_id]);

            // Redirect or return a response
            return redirect()->route('manage-post')->with('success', 'Post updated successfully');
        } catch (\Exception $e) {
            // Log the exception
            Log::error("Error updating post: " . $e->getMessage());

            // Print the exception
            dd($e);

            // Redirect or return a response with an error message
            return response()->view('error-page', ['message' => 'Edit failed'], 500);
        }
    }






    public function destroy(Post $post)
    {
        // Delete the post
        $post->delete();

        // Redirect to the manage posts page
        return redirect()->route('manage-post')->with('success', 'Post deleted successfully');
    }
}
