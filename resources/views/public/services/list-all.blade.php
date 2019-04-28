@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Services -->
    <header class="service-section mb-3" id="service-section">
        <div class="dark-overlay">
            <div class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    Our Services
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
    <section id="explore-head-section" class="bg-primary">
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
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section mt-5">
                    <span class="subheading text-muted">Our Services</span>
                    <h2>{{ config('app.name') }} provides a fully featured digital marketing services platform</h2>
                </div>
            </div>
        </div>
    </section>
@endsection