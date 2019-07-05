@extends('layouts.manage')

@section('title', 'Services Management')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">
                        <i class="fa fa-users"></i> @yield('title')
                    </h3>
                    <div class="card-tools">
                        <a href="{{ route('solutions.create') }}" class="btn btn-outline-primary">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bodered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Created on</th>
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td><a title="{{ route('solutions.show', $service->id) }}"><i class="slug">{{ $service->slug }}</i></a></td>
                                    <td>{{ $service->created_at->diffForHumans() }}</td>
                                    <td class="center">
                                        <a href="{{ route('solutions.edit', $service->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('solutions.destroy', $service->id) }}" method="POST" id="delete-service-{{ $service->id }}" style="display: none;">
                                            @csrf

                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure you want to delete this post?')){
                                                event.preventDefault();
                                                document.getElementById('#delete-service-{{ $service->id }}').submit();
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
    </div>
@endsection
