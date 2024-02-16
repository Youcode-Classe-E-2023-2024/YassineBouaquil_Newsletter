<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostCreateRequest $request)
    {
        $post = Post::create($request->validated());

        if ($request->hasFile('image')) {
            $post->addMediaFromRequest('image')->usingName($post->title)->toMediaCollection();
        }

        // Your additional logic here

        return redirect()->route('posts.index');
    }
}
