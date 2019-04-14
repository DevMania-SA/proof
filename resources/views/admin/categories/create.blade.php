@extends('layouts.manage')

@section('title', 'Create Category')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['category.store'], 'files' => true,]) !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
