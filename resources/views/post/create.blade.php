@extends('layouts.app')

@section('content')

    <div class="container">
        <link rel='stylesheet'
              href='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
        </head>


        <style type="text/css">
            .bootstrap-tagsinput .tag {
                margin-right: 2px;
                color: white !important;
                background-color: #4137ce;
                padding: .2em .6em .3em;
                font-size: 100%;
                font-weight: 700;
                vertical-align: baseline;
                border-radius: .25em;
            }
        </style>
                    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-form-label text-md-end d-flex justify-content-center">
                            <h1>Add new post</h1>
                        </div>
                        <div class="row mb-3 pt-2">


                            <label for="title" class="col-md-4 col-form-label text-md-end ">Title</label>
                            <div class="col-md-6 pt-2">
                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror">
                            </div>

                            <label for="content" class="col-md-4 col-form-label text-md-end ">Content</label>
                            <div class="col-md-6 pt-2">
                                <textarea id="content" name="content" type="text" class="form-control @error('content') is-invalid @enderror"></textarea>
                            </div>

                            <label for="cat" class="col-md-4 col-form-label text-md-end ">Category</label>
                            <div class="col-md-6 pt-2">
                                <select id="cat" name="cat" class="col-md-6 pt-2 form-select form-select-lg mb-3" >
                                    @foreach($cats as $cat)
                                        <option id="cat" name="cat" value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="tag" class="col-md-4 col-form-label text-md-end ">Tags</label>
                            <div class="col-md-6 pt-2">
                                <input id="tag" data-role="tagsinput" name="tag" type="text" value="{{$cat->tag}}" class="form-control @error('tag') is-invalid @enderror" cols="50" rows="2" >
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


    <script src='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>

    <script>
        $(function () {
            $('input').on('change', function (event) {

                var $element = $(event.target);
                var $container = $element.closest('.example');

                if (!$element.data('tagsinput'))
                    return;

                var val = $element.val();
                if (val === null)
                    val = "null";
                var items = $element.tagsinput('items');

                $('code', $('pre.val', $container)).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
                $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));


            }).trigger('change');
        });
    </script>
@endsection
