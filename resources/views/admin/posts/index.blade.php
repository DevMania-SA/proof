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
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Created On</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{!! str_limit($post->body, $limit = 27, $end = '...') !!}</td>
                                            <td>{{ $post->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" id="delete-post-{{ $post->id }}" style="display: none;">
                                                    @csrf

                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a href="" onclick="
                                                    if(confirm('Are you sure you want to delete this post?')){
                                                        event.preventDefault();
                                                        document.getElementById('#delete-post-{{ $post->id }}').submit();
                                                    } else { event.preventDefault(); }" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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
