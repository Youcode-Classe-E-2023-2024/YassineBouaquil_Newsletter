<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('index',compact('posts'));
    }
    public function subscribe(Request $request){
        $request->validate([
            'email'=>'required|unique:newsletter,email'
        ]);
        event(new UserSubscribed($request->input('email')));
        return back();


    }
}
