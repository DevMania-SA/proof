<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('js/datatables/dataTables.bootstrap4.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div id="app" class="text-muted">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('admin.includes.topbar')

            @include('admin.includes.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1>@yield('title')</h1>
                            </div>
                            {{--<div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div>--}}
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.includes.message')
                        </div>
                    </div>

                    @yield('content')
                </section>
                <!-- /.content -->
            </div><!-- /.content-wrapper -->

                @include('admin.includes.footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
    		tinymce.init({
      			selector: 'textarea',
      			theme: "modern",
                  height: 300,
                  plugins: [
                      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                      'searchreplace wordcount visualblocks visualchars code fullscreen',
                      'insertdatetime media nonbreaking save table contextmenu directionality',
                      'emoticons template paste textcolor colorpicker textpattern imagetools'
                  ],
                  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                  toolbar2: 'print preview media | forecolor backcolor emoticons',
                  image_advtab: true
    		});
    </script>

    {!! Toastr::message() !!}

    @yield('scripts')
</body>
</html>
