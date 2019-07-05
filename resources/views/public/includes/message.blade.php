@if (count($errors) > 0)
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger">
                <i class="icon fa fa-check"></i> {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> {{ session('success') }}</p>
    </div>
@endif

@if (session('error'))
    <ul class="list-group">
        <li class="list-group-item text-danger">
            <i class="icon fa fa-check"></i> {{ session('error') }}
        </li>
    </ul>
@endif

@if (Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> {{ Session::get('flash_message') }}</p>
    </div>
@endif
