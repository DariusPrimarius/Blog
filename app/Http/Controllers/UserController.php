<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        $user_id = Auth::user()->id;
        $posts = Post::where('user_id',$user_id)->get();



        return view('post.profile')->with([
            'posts'=> $posts,
        ]);

    }

    public function destroy($id)
    {

        Post::destroy($id);
        $post = Auth::user()->post;

        return view('post.profile')->with('posts', $post);

    }
    public function store()
    {
        Auth::User()->Post()->create([
            'title' => \request('title'),
            'content'=> \request('content'),
        ]);

        return redirect()->route('post.profile')->with('success','Post has been created');

    }
}
