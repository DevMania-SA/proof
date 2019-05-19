@extends('layouts.manage')

@section('title', 'Create Post')

@section('content')
    <div class="row container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">
                        <i class=""></i> Create Post
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            {!! Form::open(['method' => 'POST', 'route' => ['posts.store'], 'files' => true,]) !!}
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs12">
                                        <div class="form-group">
                                            {{ Form::label('title',  'Title') }}
                                            {{ Form::text('title', old('title'), ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('image', 'Featured Image') }}
                                            <div class="input-group">
                                                <input type="file" name="image" class="" id="image">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="publish" class="" />
                                            <label for="publish">Publish</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                                <label for="category_id">Select Category</label>
                                                <select name="category_id" id="category_id" class="form-control show-tick select2" data-live-search="true" data-placeholder="Select a Category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
                                                <label for="tag">Select Tags</label>
                                                <select name="tags[]" id="tag" class="form-control show-tick select2" data-live-search="true" multiple>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
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
                                            <textarea name="body" id="body" class="form-control"></textarea>
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
