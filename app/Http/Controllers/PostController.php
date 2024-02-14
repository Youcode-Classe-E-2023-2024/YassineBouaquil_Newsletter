<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(PostCreateRequest $request)
    {
        Post::create($request->validated());

    }


}
