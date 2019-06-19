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

    <section class="bg-light" id="services">
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
    </section>

    <section>
        <div class="container">
        
            
                <div class="row mbr-justify-content-center">
        
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-volume-up fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Stay <span>Successful</span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-calendar fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Create
                                    <span>An Effective Team</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-globe fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Launch
                                    <span>A Unique Project</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-trophy fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Achieve <span>Your Targets</span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
        
                    
        
                    
                </div>
        
        </div>
        
        </section>
@endsection
