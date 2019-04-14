@inject('request', 'Illuminate\Http\Request')
@extends('layouts.manage')

@section('title', 'Videos')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Manage Videos</h2>
                    <div class="card-tools">
                        <div class="form-group">
                            @can('video_delete')
                                <p>
                                    <ul class="list-inline">
                                        <li><a href="{{ route('videos.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
                                        <li><a href="{{ route('videos.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
                                    </ul>
                                </p>
                            @endcan
                        </div>
                        @can('video_create')
                            <p>
                                <a href="{{ route('videos.create') }}" class="btn btn-success">
                                    Add New
                                </a>
                            </p>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-hover {{ count($videos) > 0 ? 'datatable' : '' }} @can('video_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                        <thead>
                            <tr>
                                 @can('video_delete')
                                    @if ( request('show_deleted') != 1 )
                                        <th>
                                            # &nbsp;&nbsp;<input type="checkbox" id="select-all" />
                                        </th>
                                    @endif
                                @endcan

                                <th>Title</th>
                                <th>Video</th>
                                @if( request('show_deleted') == 1 )
                                    <th>&nbsp;</th>
                                @else
                                    <th>&nbsp;</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($videos) > 0)
                                @foreach ($videos as $video)
                                    <tr data-entry-id="{{ $video->id }}">
                                        @can('video_delete')
                                            @if ( request('show_deleted') != 1 )<td></td>@endif
                                        @endcan

                                        <td field-key='name'>{{ $video->name }}</td>
                                        <td field-key='video'>
                                            @foreach($video->getMedia('video') as $media)
                                                <p class="form-group">
                                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }}  ({{ round($media->size / 1000000, 2) }} MB) </a>
                                                </p>
                                            @endforeach
                                        </td>

                                        @if( request('show_deleted') == 1 )
                                            <td>
                                                @can('video_delete')
                                                    {!! Form::open(array(
                                                        'style' => 'display: inline-block;',
                                                        'method' => 'POST',
                                                        'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                                        'route' => ['videos.restore', $video->id])) !!}
                                                    {!! Form::submit(trans('restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                                    @can('video_delete')
                                                    {!! Form::open(array(
                                                        'style' => 'display: inline-block;',
                                                        'method' => 'DELETE',
                                                        'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                                        'route' => ['videos.perma_del', $video->id])) !!}
                                                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        @else
                                            <td>
                                                @can('video_view')
                                                    <a href="{{ route('videos.show',[$video->id]) }}" class="btn btn-sm btn-primary">View</a>
                                                @endcan
                                                @can('video_edit')
                                                    <a href="{{ route('videos.edit',[$video->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                                @endcan
                                                @can('video_delete')
                                                {!! Form::open(array(
                                                    'style' => 'display: inline-block;',
                                                    'method' => 'DELETE',
                                                    'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                                    'route' => ['videos.destroy', $video->id])) !!}
                                                {!! Form::submit('Delete', array('class' => 'btn btn-sm btn-danger')) !!}
                                                {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">There are no entries in the table</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('video_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('videos.mass_destroy') }}'; @endif
        @endcan
    </script>
@endsection
