@extends('layouts.manage')

@section('title', 'Add User')

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'post', 'files' => true]) !!}
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New User</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" />
                            @if ($errors->has('name'))
                                <span class="form-text invalid-feedback">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" />
                            @if ($errors->has('email'))
                                <span class="form-text invalid-feedback">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" v-if="!auto_password"/>

                            <b-form-checkbox name="auto_generate" :checked="true" v-model="auto_password">Auto Generate</b-form-checkbox>
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

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: function(){
                return {
                    auto_password: true
                }
            }
        });
    </script>
@endsection