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
                                            <input type="text" name="title" class="form-control" id="title">
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('image', 'Featured Image') }}
                                            <div class="input-group">
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>
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
                                            <label for="published_at">Published At</label>
                                            <input type="text" name="published_at" class="form-control" id="published_at">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" cols="5" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Body">Body</label>
                                            <textarea name="body" id="body" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-paper-plane"></i> Create Post
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
    <script>
        flatpickr("#published_at", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
