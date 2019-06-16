@extends('layouts.home')

@section('content')
    <header class="home-section" id="home-section">
        <div class="dark-overlay">
            <div class="home-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    Proof Digital Media Group
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="">
                                    Prove them All Wrong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Explore Section -->
    <section id="explore-head-section" class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="">
                        <h1 class="display-4 mt-4">
                            Explore
                        </h1>
                        <p class="lead">
                            PDMG has developed a variety of customized mobile solutions and value added 
                            services that is in line with the Protection of Personal Information Act. We 
                            consistently hone our teams’ skills and strive to provide a service that’s -
                            client specific to deliver maximized results that build and sustain your 
                            business.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-outline-secondary mt-4 mb-3">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="explore-section" class="bg-light text-muted">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image">
                    <img src="{{ asset('images/explore.jpg') }}" alt="Explore" class="img-fluid mb-3 rounded-circle">
                </div>
                <div class="col-md-6 contents">
                    <h3 class="mb-3">Explore &amp; Connect</h3>
                    <p class="lead">
                        To make a living as a creator, you don’t need to stockpile a million customers, go viral as a 
                        brand, or top the bestseller lists. You just need a good, core set of people who say “shut up 
                        and take my money” when you launch new products. Here’s how to get there.
                    </p>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Revamp Your Content Strategy
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Build an Engaged Community Around Core Problems Your Products Solve
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Talk to Your Fans, Then Deliver Value and Solicit Feedback
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Head Section -->
    <section id="offer-head-section" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="p-5">
                        <h1 class="display-4">
                            What We Offer?
                        </h1>
                        <p class="lead">
                            PDMG is a cellular solutions and innovations service provider seeking to enable 
                            small, medium and large companies in embracing the mobile revolution and developing 
                            strategies that will take their products & services into the mobile environment. 
                            PDMG, through our strong consultancy and cellular technology skills, is well suited 
                            to assist you in “going mobile”. Furthermore, we have developed a suite of products 
                            that businesses can make use of immediately in order to bring down the barriers of 
                            making use of cellular technology in marketing strategies.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-outline-light mt-3">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="offer-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-4 mb-3">Offers</h3>
                    <p>
                        Join thousands of businesses and organizations, from all industry sectors, using 
                        us to find new prospects, increase sales and develop exceptional brand loyalty.
                    </p>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            PDMG offers Bulk SMS for (SALES, MARKETING, CUSTOMER BIRTHDAYS, CUSTOMER CARE & INFORMATION 
                            SMS’s) your next SMS campaign could be delivered straight into the hands of your prospects 
                            and customers. (Online SMS Program – No Installation required)
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-4 align-self-start">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            PDMG offers digital marketing strategies to sell, and distribute goods as well as music via 
                            sms gateway systems. The mobile phone also provides companies with a unique and direct means 
                            of extracting payments from customers.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('images/explore.jpg') }}" alt="Explore" class="img-fluid mb-3 rounded-circle">
                </div>
            </div>
        </div>
    </section>


    <!-- Offer Head Section -->
    <section id="choose-head-section" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-4">
                            Why Choose Us
                        </h1>
                        <p class="lead">
                            We are a team of specialized creatives and we pride ourselves on providing an exceptional 
                            service while keeping up to date with the latest online innovations. We consistently hone 
                            our teams’ skills and strive to provide a service that’s client specific to deliver maximized 
                            results that build and sustain your brand.
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-outline-light mt-3">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="choose-section" class="bg-light text-muted py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column align-content-center">
                        <img src="{{ asset('images/explore.jpg') }}" alt="Explore" class="img-fluid mb-3 rounded-circle">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="media col-md-12">
                            <i class="fa fa-music mr-4" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5 class="mt-0">EXPAND YOUR DIGITAL MARKETING STRATEGY</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="media col-md-12">
                            <i class="fa fa-rocket mr-4" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5 class="mt-0">
                                    LEVARAGE YOUR CUSTOMER DATABASE AND CRM
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="media col-md-12">
                            <i class="fa fa-users mr-4" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5 class="mt-0">WE SUPPORT CORPORATE AND STRATEGIC DEVELOPMENT</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="media col-md-12">
                            <i class="fas fa-user-check mr-4" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5 class="mt-0">WE DEVELOP OMNI CHANNEL BRAND MANAGEMENT STRATEGY</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
