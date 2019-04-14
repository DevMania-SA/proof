@extends('layouts.manage')

@section('title', 'Create Post')

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
                                            {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('image', 'Featured Image') }}
                                            <div class="input-group">
                                                <input type="file" name="image" class="" id="image">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="publish" class="" @if($post->is_approved ==1) checked @endif />
                                            <label for="publish">Publish</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group form-float">
                                            <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                                <label for="category">Select Category</label>
                                                <select name="categories[]" id="category" class="form-control show-tick select2" data-live-search="true" multiple="multiple" data-placeholder="Select a Categories">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @foreach ($post->categories as $postCat)
                                                                @if ($postCat->id == $category->id) selected @endif
                                                            @endforeach
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
                                            <label for="Body">Body</label>
                                            <textarea name="body" id="body" class="form-control">{{ $post->body }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Save
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
