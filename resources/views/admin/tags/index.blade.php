@extends('layouts.manage')

@section('title', 'Tags')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tags</h3>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-hover d-print-table-cell">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ ucfirst($tag->name) }}</td>
                                    <td>
                                        <i>{{ url('/blog/tag/'.$tag->slug) }}</i>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" id="delete-tag-{{ $tag->id }}" style="display: none;">
                                            @csrf

                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                                if(confirm('Are you sure you want to delete {{ $tag->name }} tag?')){

                                                document.getElementById('#delete-tag-{{ $tag->id }}').submit();
                                                } else { event.preventDefault(); }" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
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
                    <h3 class="card-title">Add Tag</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['tags.store'], 'files' => true,]) !!}
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
