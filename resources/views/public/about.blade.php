@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <header class="about-section" id="about-section">
        <div class="dark-overlay">
            <div class="about-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    About Us
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="aboutus-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="text mt-5">
                        <div class="text-inner">
                            <h1 class="display-4">Welcome to our website</h1>
                            <p>
                                Established in 2019, Proof Digital Media Group is a full-service digital 
                                marketing company. We boast a team of highly enthusiastic digital marketers 
                                with a refined skills base to handle all the aspects of digital marketing. 
                                We are fast, flexible, reliable, dedicated to connecting our clients to 
                                their customers through excellent client service and innovative strategies 
                                focused on achieving only the best results.
                            </p>

                            <div class="d-flex flex-row">
                                <div class="p-4 align-self-start">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-4 align-self-end">
                                    We offer digital marketing strategies to sell, and distribute goods as 
                                    well as music via sms gateway systems. 
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-4 align-self-start">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-4 align-self-end">
                                    We are also marketing consultants, whether you need to bounce your thinking 
                                    off an objective third-party, or are starting a new business from scratch, 
                                    a marketing consultation is useful at all stages of the development of your 
                                    brand.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 my-5 about-img"></div>
            </div>
        </div>
    </section>

    <section class="actual-offer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 my-5 offer-img"></div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mt-5">
                        <div class="inner">
                            <h1 class="display-4">What we actually offer?</h1>
                            <p>
                                We know we could go on for hours about how great our business is. (And don’t 
                                blame us—we’re amazing!) But since we need to keep it short and sweet, here are 
                                a few suggestions of our offerings and/marketing tips for various businesses …
                            </p>

                            <div class="d-flex flex-row">
                                <div class="p-4 align-self-start">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-4 align-self-end">
                                    Omni Channel Brand Management  
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-4 align-self-start">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-4 align-self-end">
                                    Marketing tips for your business
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="offer-head-section" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-4">
                            Vision &amp; Mission
                        </h1>
                        <p class="lead">
                            Our mission is to use our knowledge of digital and mobile methods to define new markets 
                            for digital services and always be at the forefront of the digital revolution in South 
                            Africa.
                        </p>

                        <p class="lead mb-5">
                            Our vision is to create value for our clients using Mobile Value Added Service methods 
                            and content to enhance their core business focus.
                        </p>

                        <a href="{{ route('services') }}" class="btn btn-outline-light">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection