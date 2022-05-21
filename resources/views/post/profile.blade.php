@extends('layouts.app')

@section('content')
<div class="container">
    <form method="get" enctype="multipart/form-data">
        @foreach($posts as $post)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="col" style="text-align: right;">
                        <h5>{{ $post->user->name }}</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="/storage/{{ $post->image }}"  alt="" class="img-fluid">
                </div>
                <div class="col-12">
                    <h5>{{ $post->content }}</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>{{ $post->cat->name}}</h6>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <h6>{{ $post->created_at }}</h6>
                    </div>
                </div>
                <div class="col">
                    <h6>{{ $post->tag }}</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('profile.post.delete', $post) }}" class="btn btn-danger d-flex">Delete</a>
                    <a href="{{ route('post.edit', $post) }}" class="btn btn-secondary d-flex">Edit</a>
                </div>
                <br>
                <div class="border-bottom border-3 border-secondary">
                </div>
            </div>
        </div>
    </form>
        <br>
        <br>
        <br>
    @endforeach
</div>
@endsection
