@extends('layouts.app')

@section('title', ucfirst($service->name))

@section('content')
    <header class="service-section" id="service-section">
        <div class="dark-overlay">
            <div class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    @yield('title')
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    Service
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="service bg-light text-muted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="singe-service">
                        <div class="service-details">
{{--                            <h1>{{ $service->name }}</h1>--}}

                            <div class="post-body p-l-100 p-r-100">
                                {!! $service->description !!}
                            </div>

                            <div class="d-flex my-3 p-l-100 p-r-100">
                                <div class="social-share">
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d2fa45fe04751ef"></script>
@endsection