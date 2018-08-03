<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::where('status', 'PUBLISHED')->latest()->paginate(5);

        return view('blog.index', compact('categories', 'posts'));
    }

    public function show(Post $post)
    {
        $categories = $categories = Category::all();

        $otherPosts = Post::where('status', 'PUBLISHED')
            ->where('slug', '<>', $post->slug)
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('blog.post', compact('post', 'categories', 'otherPosts'));
    }
    
}
