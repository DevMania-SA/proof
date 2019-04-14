@extends('layouts.manage')

@section('title', 'Artists')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Artists</h3>
                    <div class="card-tools">
                        <a class="btn btn-primary" href="{{ route('artist.create') }}">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artists as $artist)
                                <tr>
                                    <td>{{ $artist->id }}</td>
                                    <td>
                                        <img src="{{ asset('images/artists/small/'.$artist->image) }}" alt="{{ $artist->name }}" width="60" height="60" class="img-fluid small-product" />
                                    </td>
                                    <td>{{ $artist->name }}</td>
                                    <td>{{ $artist->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('artist.edit', $artist->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pen"></i>
                                        </a>

                                        <a href="{{ route('artist.destroy', $artist->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
