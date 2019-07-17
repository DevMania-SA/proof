@extends('layouts.manage')

@section('title', "Edit $user->name's Details")

@section('content')
    {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'post', 'files' => true]) !!}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New User</h3>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        @if ($errors->has('name'))
                            <span class="form-text invalid-feedback">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email"/>
                        @if ($errors->has('email'))
                            <span class="form-text invalid-feedback">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        {{--<select class="form-control select2" multiple="multiple" data-placeholder="Select a role" style="width: 100%;">
                            <option value="admin">Admin</option>
                            <option value="author">Author</option>
                            <option value="editor">Editor</option>
                            <option value="user">User</option>
                        </select>--}}
                        {!! Form::select('name', ['admin' => 'Admin', 'author' => 'Author', 'editor' => 'Editor', 'user' => 'User'] , null, ['class' => 'form-control'] ) !!}
                        <span class="form-help"></span>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane"></i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
