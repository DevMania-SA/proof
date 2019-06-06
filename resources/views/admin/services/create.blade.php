@extends('layouts.manage')

@section('title', 'Add New Service')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['solutions.store'], 'files' => true,]) !!}
                        <div class="form-group">
                            <label for="name">Service Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection