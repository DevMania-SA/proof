@extends('layouts.manage')

@section('title','Add New Track')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['route' => 'songs.store', 'method' => 'post', 'files' => true]) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Song Title') !!}
                                    {!! Form::text('title', old('title'),['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('artist', 'Artist') !!}
                                    {!! Form::text('artist', old('artist'),['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('featured_artist', 'Featured Artist') !!}
                                    {!! Form::text('featured_artist',old('featured_artist'),['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('song', 'Song') !!}
                                    <div class="form-control">
                                        {!! Form::file('song', ['id' => 'song']) !!}
                                    </div>
                                </div>

                                {{ Form::submit('Save', ['class' => 'btn btn-success']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
