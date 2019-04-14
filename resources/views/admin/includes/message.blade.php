@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul class="list-group-unbordered">
            @foreach ($errors->all() as $error)
                <li><i class="icon fa fa-close"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> {{ session('success') }}</p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> {{ session('error') }}</p>
    </div>
@endif

@if (Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-check"></i> {{ Session::get('flash_message') }}</p>
    </div>
@endif
