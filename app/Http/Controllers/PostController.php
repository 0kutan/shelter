<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }

    public function create()
    {
        return view('/posts/create');
    }
    
    public function store(Reauest $request, Post $post)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $input = $request['post'];
        $post->fill($input)->save;
        return redirect('/posts/' . $post->id);
    }
}
