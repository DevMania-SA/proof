@extends('layouts.manage')

@section('title', 'Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    {{-- <div class="card-tools">
                        <a href="{{ route('category.create') }}" class="btn btn-outline-success">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                    </div> --}}
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
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pen"></i>
                                        </a>

                                        <button type="button" onclick="handleDelete({{ $category->id }})" class="btn btn-danger btn-sm" {{--data-toggle="modal" data-target="#deleteModal"--}}>
                                            <div class="fa fa-trash"></div>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['category.store'], 'files' => true,]) !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <button type="submit" class="btn btn-success">Add Category</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @include('admin.includes.modals.delete-category')
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteCategoryForm');

            form.action = '/manage/category/' + id

            $('#deleteModal').modal('show');
        }
    </script>
@endsection
