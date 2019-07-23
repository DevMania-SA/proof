@extends('layouts.manage')

@section('title', 'Blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog Posts</h3>
                    <div class="card-tools">
                            <a class="btn btn-primary" href="{{ route('posts.create') }}">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @if (count($posts) > 0)
                                <table id="datatable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created On</th>
                                            <th>Modify</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/'.$post->image) }}" width="60px" height="40px" class="img-fluid" alt="{{ $post->title }}" style="height: 40px !important;">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ ucfirst($post->category->name) }}</td>
                                            <td>{{ $post->created_at->toFormattedDateString() }}</td>

                                            @if (!$post->trashed())
                                                <td>
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-info">
                                                        Edit
                                                    </a>
                                                </td>

                                            @else
                                                <td>
                                                    <form action="{{ route('post.restore', $post->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <button type="submit" class="btn btn-sm btn-primary">Restore</button>
                                                    </form>
                                                </td>
                                            @endif
                                            <td>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        {{ $post->trashed() ? 'Delete' : 'Trash' }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="jumbotron d-flex justify-content-center">
                                    <h2 class="text-center">No posts available yet!</h2>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

