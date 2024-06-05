<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Cloudinary;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Animal $post)
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
