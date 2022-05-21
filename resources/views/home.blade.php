@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-between">
    <div class="col-2">
        <form class="col-2 justify-content-start">
            @foreach($categories as $category)
                        <a href="{{ route('post.results.category', $category->id) }}" class="btn btn-outline-dark ">{{$category->name}}</a>
            @endforeach
        </form>
    </div>

    <div class=" col">
        <div  class="d-flex justify-content-center">
            <div>
                <form method="get" action="{{route('post.results')}}" class="d-flex" enctype="multipart/form-data">
                    <div class="col-12" >
                        <input id="query" name="query" type="text" class=" form-control @error('query') is-invalid @enderror">
                    </div>
                    <div class="col-6 px-2">
                        <button class="btn btn-secondary">
                            Search by title
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <br>
        <br>

        <div class="d-flex justify-content-center">
            <form method="get" action="{{route('post.create')}}" class="d-flex" enctype="multipart/form-data">
                <div>
                    <button class="btn btn-secondary d-flex">
                        Add new post
                    </button>
                </div>
            </form>
        </div>

        <br>

        <div class="d-flex justify-content-center">
            <form method="get" action="{{route('post.users')}}" class="d-flex" enctype="multipart/form-data">
                <div>
                    <button class="btn btn-secondary d-flex ">
                        Show Your posts
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
