@extends('layouts.manage')

@section('title', 'Edit '.$service->name)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['solutions.update', $service->id], 'files' => true,]) !!}
                        <div class="form-group">
                            <label for="name">Service Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $service->name }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">
                                {{ $service->description }}
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
