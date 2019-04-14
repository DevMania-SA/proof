@extends('layouts.manage')

@section('title', 'Edit Category')

@section('content')
    <div class="row container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7">
                            {!! Form::open(['method' => 'POST', 'route' => ['category.update', $category->id], 'files' => true,]) !!}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                                </div>

                                <button type="submit" class="btn btn-success">Save</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
