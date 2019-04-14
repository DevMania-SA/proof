@extends('layouts.manage')

@section('title', 'Edit Artist Details')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Artist</h3>
                    <div class="card-tools">
                        <a href="{{ route('artist.index') }}" class="btn btn-flat btn-default">
                            <i class="fa fa-arrow-alt-circle-left"></i> Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['route' => ['artist.update', $artist->id], 'method' => 'post', 'files' => true]) !!}
                                {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Stage Name" value="{{ $artist->name }}" />
                            </div>

                            <div class="form-group">
                                <label for="details">About Artist</label>
                                <textarea name="details" id="details" class="form-control" placeholder="About Artist">{{ $artist->details  }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" name="genre" id="genre" class="form-control" placeholder="Genre" value="{{ $artist->genre }}" />
                            </div>

                            <div class="form-group">
                                <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                    <label for="position">Select Position</label>
                                    <select name="position[]" id="position" class="form-control show-tick select2" data-live-search="true" multiple="multiple" data-placeholder="Select a position">
                                        @if(!empty($artist->position))
                                            <option value="{{ $artist->position }}" selected>{{ ucfirst($artist->position) }}</option>
                                        @endif
                                        <option value="singer">Singer</option>
                                        <option value="dj">DJ</option>
                                        <option value="producer">Producer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Avatar</label>
                                <input type="file" name="image" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Social</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="url" name="facebook" class="form-control" placeholder="facebook" value="{{ $artist->facebook }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="url" name="twitter" class="form-control" placeholder="twitter" value="{{ $artist->twitter }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="url" name="instagram" class="form-control" placeholder="instagram" value="{{ $artist->instagram }}" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Save <i class="fa fa-paper-plane"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
