@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Services -->
    <header class="service-section" id="service-section">
        <div class="dark-overlay">
            <div class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    Services
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Explore Section -->
    <!-- <section id="explore-head-section" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-5">
                            WE COMMITED TO HELPING
                        </h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, perspiciatis
                            dolor blanditiis modi soluta numquam cumque minus odit, excepturi tempore ex
                            delectus saepe repellat dolorem ullam dolores nisi, non molestias.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section my-5">
                    <span class="subheading text-muted">Our Services</span>
                    <h2>{{ config('app.name') }} provides a fully featured digital marketing services platform</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-light" id="services">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="my-5">
                            {{ $service->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <!-- Services section -->
    <section id="what-we-do" class="bg-light text-muted">
        <div class="container-fluid">
            <h2 class="section-title mb-2 h1">What we do</h2>
            <p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p>
            <div class="row mt-5">
                @foreach ($services as $service)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-block block-1">
                                <h3 class="card-title">{{ $service->name }}</h3>
                                <p class="card-text">
                                    {!! str_limit($service->description, $limit = 75, $end = '...') !!}
                                </p>
                                <a href="{{ route('service.slug', $service->slug) }}" title="Read more" class="read-more" >
                                    Read more<i class="fa fa-angle-double-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Services section -->
@endsection
