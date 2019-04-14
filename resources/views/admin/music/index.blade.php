@extends('layouts.manage')

@section('title','Manage Music')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Music</h3>
                    <div class="card-tools">
                        <a href="{{ route('songs.create') }}" class="btn btn-template-outlined">
                            Add Song <i class="fa fa-plus-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Artists</th>
                                <th>Featured Artist</th>
                                <th>Song</th>
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{ $song->id }}</td>
                                    <td>{{ $song->title }}</td>
                                    <td>{{ $song->artist }}</td>
                                    <td>{{ $song->featured_artist }}</td>
                                    <td>
                                        <audio controls="" autoplay="" name="media">
                                            <source src="{!! asset('storage/music/'.$song->song) !!}" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
