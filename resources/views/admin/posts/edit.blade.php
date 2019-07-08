@extends('layouts.manage')

@section('title', 'Edit '. $post->title)

@section('content')
    <div class="row container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">
                        <i class="fa fa-pen"></i> Edit Post
                    </h3>

                    <div class="card-tools">
                        <a href="{{ route('posts.index') }}" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i> Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-11">
                            {!! Form::open(['method' => 'POST', 'route' => ['posts.update', $post->id], 'files' => true,]) !!}
                                {{ method_field('PUT') }}

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12">
                                        <div class="form-group">
                                            {{ Form::label('title',  'Title') }}
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group form-float">
                                            <div class="form-line {{ $errors->has('category') ? 'focused error' : '' }}">
                                                <label for="category">Select Category</label>
                                                <select name="category" id="category" class="form-control show-tick select2" data-live-search="true" multiple="multiple" data-placeholder="Select a Category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if ($category->id == $post->category_id)
                                                                selected
                                                            @endif
                                                        >{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form form-float">
                                            <div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
                                                <label for="tag">Select Tags</label>
                                                <select name="tags[]" id="tag" class="form-control show-tick select2" data-live-search="true" multiple>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}"
                                                            @foreach ($post->tags as $postTag)
                                                                @if ($postTag->id == $tag->id) selected @endif
                                                            @endforeach
                                                        >{{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="published_at">Published At</label>
                                            <input type="text" name="published_at" class="form-control" id="published_at" value="{{ $post->published_at }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" cols="5" rows="3">{{ $post->description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="Body">Body</label>
                                            <textarea name="body" id="body" class="form-control">{{ $post->body }}</textarea>
                                        </div>

                                        @if (isset($post))
                                            <div class="form-group">
                                                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="">
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            {{ Form::label('image', 'Featured Image') }}
                                            <div class="input-group">
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Update Post
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
