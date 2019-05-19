@extends('layouts.manage')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ count($subscribers) }}</h3>
  
                        <p>Subscribers</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ count($posts) }}</h3>
                        <p>Posts</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-newspaper"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ count($users) }}</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div><!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">
                            <i class="fa fa-pie-chart mr-1"></i>
                            Sales
                        </h3>
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item">
                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart"
                                style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                        </div>
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </section><!-- /.Left col -->
            
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <!-- Map card -->
                <div class="card bg-primary-gradient">
                    <div class="card-header no-border">
                        <h3 class="card-title">
                            <i class="fa fa-map-marker mr-1"></i>
                            Visitors
                        </h3>
                        <!-- card tools -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip" title="Date range">
                                <i class="fa fa-calendar"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div><!-- /.card-tools -->
                    </div>

                    <div class="card-body">
                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                    </div><!-- /.card-body-->

                    <div class="card-footer bg-transparent">
                        <div class="row">
                            <div class="col-4 text-center">
                                <div id="sparkline-1"></div>
                                <div class="text-white">Visitors</div>
                            </div><!-- ./col -->

                            <div class="col-4 text-center">
                                <div id="sparkline-2"></div>
                                <div class="text-white">Online</div>
                            </div><!-- ./col -->

                            <div class="col-4 text-center">
                                <div id="sparkline-3"></div>
                                <div class="text-white">Sales</div>
                            </div><!-- ./col -->
                        </div><!-- /.row -->
                    </div>
                </div>
                <!-- /.card -->
            </section><!-- right col -->
        </div>
    </div>
@endsection
