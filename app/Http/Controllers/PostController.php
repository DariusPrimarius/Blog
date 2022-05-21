<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $posts = Post::where('title',\request('query'))->orWhere('tag', 'LIKE', '%'.\request('query').'%')->get();

        return view('post.result')->with([
            'posts'=> $posts,
        ]);

    }

    public function create()
    {
        $cats = Cat::all();
        return view('post.create')->with('cats', $cats);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:50',
            'cat' => 'required',
            'image' => 'required|image',
        ]);
        $imagePath = \request('image')->store('uploads', 'public');
        $dataTag = str_replace('"', '', \request('tag'));


        Auth::User()->Post()->create([
            'title' => \request('title'),
            'content'=> \request('content'),
            'cat_id' => \request('cat'),
            'tag'   =>  $dataTag,
            'image' =>  $imagePath,
        ]);

        return redirect()->route('home')->with('success','Post has been created');

    }
    public function edit($id)
    {
        $cats = Cat::all();
        $post = Post::where('id',"=", $id)->first();

        return view('post.edit')->with([
            'post'=> $post,
            'cats'=> $cats,
        ]);

    }
    public function update($id)
    {
        $post = Post::where('id',$id);
        $imagePath = \request('image')->store('uploads', 'public');
        $dataTag = str_replace('"', '', \request('tag'));
        $post->update([
            'title' => \request('title'),
            'content'=> \request('content'),
            'cat_id' => \request('cat'),
            'tag'   =>  $dataTag,
            'image' =>  $imagePath,
        ]);


        return redirect()->route('home')->with('success','Profile has been updated');
    }


    public function destroy($user)
    {
        //
    }
}
