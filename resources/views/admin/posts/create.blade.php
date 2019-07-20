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
                                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('image', 'Featured Image') }}
                                            <div class="input-group">
                                                <input type="file" name="image" class="form-control" id="image" value="{{ old('image') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                                <label for="category">Select Category</label>
                                                <select name="category" id="category" class="form-control show-tick select2" data-live-search="true" data-placeholder="Select a Category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
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
                                            <input type="text" name="published_at" class="form-control" id="published_at" value="{{ old('published_at') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" cols="5" rows="3">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editor">Body</label>
                                            <textarea name="body" id="editor" class="form-control">{{ old('body') }}</textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor', {
                // plugins: { EasyImage },
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' , 'imageUpload' ],
                // heading: {
                //     options: [
                //         { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                //         { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                //         { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                //     ]
                // },
                cloudServices: {
                    tokenUrl: 'https://40779.cke-cs.com/token/dev/AUiRGwTDfIwo9J4Ya7gxAARkccAJn3JI4ThgevnRQhzqFGYfnigwQf9mawfZ',
                    uploadUrl: 'https://40779.cke-cs.com/easyimage/upload/'
                }
            } ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


    {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
    <script>
        flatpickr("#published_at", {
            enableTime: true,
            enableSeconds: true
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
