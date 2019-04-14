@extends('layouts.manage')

@section('title', 'Settings')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Custom Tabs -->
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3">Settings</h3>
                            <ul class="nav nav-pills ml-auto p-2">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab_1" data-toggle="tab">
                                        Tab 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab_2" data-toggle="tab">
                                        Tab 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services" data-toggle="tab">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        Dropdown <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                                        <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                                        <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                                        <div class="divider"></div>
                                        <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    A wonderful serenity has taken possession of my entire soul,
                                    like these sweet mornings of spring which I enjoy with my whole heart.
                                    I am alone, and feel the charm of existence in this spot,
                                    which was created for the bliss of souls like mine. I am so happy,
                                    my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                    that I neglect my talents. I should be incapable of drawing a single stroke
                                    at the present moment; and yet I feel that I never was a greater artist than now.
                                </div><!-- /.tab-pane -->

                                <div class="tab-pane" id="tab_2">
                                    The European languages are members of the same family. Their separate existence is a myth.
                                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                    new common language would be desirable: one could refuse to pay expensive translators. To
                                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                    words. If several languages coalesce, the grammar of the resulting language is more simple
                                    and regular than that of the individual languages.
                                </div><!-- /.tab-pane -->

                                <div class="tab-pane" id="services">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-default btn-sm float-right"><i class="fa fa-plus"></i> Add Service</button>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Attachment -->
                                            <div class="attachment-block clearfix">
                                                <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">
                            
                                                <div class="attachment-pushed">
                                                <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                            
                                                <div class="attachment-text">
                                                    Description about the attachment can be placed here.
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                                </div>
                                                <!-- /.attachment-text -->
                                                </div>
                                                <!-- /.attachment-pushed -->
                                            </div>
                                            <!-- /.attachment-block -->
                                        </div>
                                    </div><!-- /.row-->
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div><!-- ./card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section>
@endsection