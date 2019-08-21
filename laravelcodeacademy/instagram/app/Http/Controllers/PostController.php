<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){

        return view('posts.create');
    }
    public function store(PostRequest $request){
       
        
        $imagepath = $request->image->store('uploads', 'public');
       
        
        auth()->user()->posts()->create([
            'caption' => $request->caption,
            'image'   => $imagepath
        ]);
        
        return redirect("profile/".auth()->user()->id);

    }
    public function showPost($post_id)
    {
        $post = Post::findOrFail($post_id);

        return view("posts.show_post")->with(["post" => $post]);
    }
}
