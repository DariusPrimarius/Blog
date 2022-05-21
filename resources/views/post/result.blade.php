@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-6">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="col" style="text-align: right;">
                    <h1>{{ $post->user->name }}</h1>
                </div>
            </div>
            <div >
                <img src="/storage/{{ $post->image }}"  alt="" class="img-fluid">
            </div>
            <div class="col">
                <h4>{{ $post->content }}</h4>
            </div>
            <div class="row">
                <div class="col">
                    <h6>{{ $post->cat->name}}</h6>
                </div>
                <div class="col">
                    <h4>{{ $post->created_at }}</h4>
                </div>
            </div>
            <div class="col">
                <h4>{{ $post->tag }}</h4>
            </div>
            <div class="col align-content-center border-bottom border-3 border-secondary">
                <br>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
