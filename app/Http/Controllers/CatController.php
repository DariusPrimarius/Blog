<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show($id)
    {

        $posts = Post::where('cat_id',$id)->get();
        return view('post.result')->with('posts', $posts);


    }
}
