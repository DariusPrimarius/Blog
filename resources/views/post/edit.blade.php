@extends('layouts.app')

@section('content')

    <div class="container">


        <form method="post" action="{{ route('post.update', $post) }}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put" />

            @csrf
            <div class="col-form-label text-md-end d-flex justify-content-center">
                <h1>Edit post</h1>
            </div>
            <div class="row mb-3 pt-2">


                <label for="title" class="col-md-4 col-form-label text-md-end ">Title</label>
                <div class="col-md-6 pt-2">
                    <input id="title" name="title" value="{{old('title') ?? $post->title }}" type="text" class="form-control @error('title') is-invalid @enderror">
                </div>

                <label for="content" class="col-md-4 col-form-label text-md-end ">Content</label>
                <div class="col-md-6 pt-2">
                    <textarea name="content" id="content" class="form-control" rows="5">{{old('content')?? $post->content }}</textarea>
                </div>

                <label for="cat" class="col-md-4 col-form-label text-md-end ">Category</label>
                <div class="col-md-6 pt-2">
                    <select id="cat" name="cat" class="col-md-6 pt-2 form-select form-select-sm mb-3" >
                        @foreach($cats as $cat)
                            <option id="cat" name="cat" value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>

                <label for="tag" class="col-md-4 col-form-label text-md-end ">Tags</label>
                <div class="col-md-6 pt-2">
                    <textarea tag="tag" name="tag" type="text" class="form-control @error('tag') is-invalid @enderror" cols="50" rows="2" >{{old('content')?? $post->tag }}</textarea>
                </div>

                <label for="photo" class="col-md-4 col-form-label text-md-end ">Photo</label>
                <div class="col-md-6 pt-2">
                    <input id="image" name="image" type="file" class="form-control-file @error('tag') is-invalid @enderror" cols="50" rows="2" >
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4 pt-4">
                        <button class="btn btn-secondary">
                            Finish
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
