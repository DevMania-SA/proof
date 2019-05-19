@extends('layouts.manage')

@section('title', 'Categories')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    <div class="card-tools">
                        <a href="{{ route('category.create') }}" class="btn btn-outline-success">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <i>{{ url('/blog/category/'. $category->slug) }}</i>
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pen"></i>
                                        </a>

                                        <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy', $category->id) }}" style="display: none;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if (confirm('Are you sure? You want to delete this?')) {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $category->id }}').submit();
                                            } else {
                                                event.preventDefault();
                                            }" class="btn btn-sm btn-danger">
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
