@extends('layouts.home')

@section('content')
    <header class="home-section mb-3" id="home-section">
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
                                <div class="p-4">
                                    Prove them All Wrong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- <div class="container main-point">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <i class="fa fa-envelope mt-3" aria-hidden="true"></i>
                    <div class="card-body">
                        <h4>Bulk SMS</h4>
                        <p>
                            Join thousands of businesses and organizations, from all industry sectors, 
                            using us to find new prospects, increase sales and develop exceptional 
                            brand loyalty
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-calendar-alt mt-3" aria-hidden="true"></i>
                    <div class="card-body">
                        <h4>Mobile Markerting Solutions</h4>
                        <p>
                            The fast-paced digital world requires businesses to have a strong online 
                            marketing presence in order to reach their target consumers
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-users mt-3" aria-hidden="true"></i>
                    <div class="card-body">
                        <h4>CRM (Customer Relation Management)</h4>
                        <p>
                            At PDMG we believe that the real value in mobile marketing lies in its 
                            ability to deliver highly effective and inexpensive customer relationship 
                            management, which ultimately results in loyalty and sales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-thumbs-up mt-3" aria-hidden="true"></i>
                    <div class="card-body">
                        <h4>Knowledge &amp; Business Intel</h4>
                        <p>
                            The mobile phone provides companies with a unique and direct means of 
                            extracting payments from customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Explore Section -->
    <section id="explore-head-section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-5">
                        <h1 class="display-4">
                            Explore
                        </h1>
                        <p class="lead">
                            PDMG has developed a variety of customized mobile solutions and value added 
                            services that is in line with the Protection of Personal Information Act. We 
                            consistently hone our teams’ skills and strive to provide a service that’s 
                            client specific to deliver maximized results that build and sustain your 
                            business.
                        </p>
                        <a href="{{ route('services') }}" class="btn btn-outline-secondary">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="explore-section" class="bg-light text-muted py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/explore.jpg') }}" alt="Explore" class="img-fluid mb-3 rounded-circle">
                </div>
                <div class="col-md-6">
                    <h3>Explore &amp; Connect</h3>
                    <p>
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

    {{-- <div class="container about-us mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h4>ABOUT US</h4>
                <div class="underline"></div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p>
                   
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <h1>WHO WE ARE</h1>
                <div class="underline-left"></div>
                <p class="mt-3 text-justify about-text">
                    Established in 2019, Proof Digital Media Group is a full-service digital marketing 
                    company based in Mpumalanga, Secunda. We boast a team of highly enthusiastic digital 
                    marketers with a refined skills base to handle all the aspects of digital marketing. 
                    We are fast, flexible, reliable experts, dedicated to connecting our clients to their 
                    customers through excellent client service and innovative strategies focused on 
                    achieving only the best results.
                </p>
          <a href="{{ route('contact') }}" class="btn btn-custom btn-lg">CONTACT US</a>
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/img%20(3).jpg')}}" alt="about us" class="img-fluid">
            </div>
        </div>
    </div> --}}

    <!-- Offer Head Section -->
    <section id="offer-head-section" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col text-center">
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
                        <a href="{{ route('services') }}" class="btn btn-outline-light">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="offer-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Offers</h3>
                    <p>
                        Offers, Join thousands of businesses and organizations, from all industry sectors, using 
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
                        <a href="{{ route('about') }}" class="btn btn-outline-light">Find Out More</a>
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
                                <h5 class="mt-0">LEVARAGE YOUR CUSTOMER DATABASE AND CRM MANAGEMENT</h5>
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



    {{-- <div class="container-fluid achivements" data-stellar-background-ratio="0.5">
        <div class="container mt-5">
            <div class="row">
                <div class="text-center col-md-12">
                    <h4>OUR ACHIEVEMENTS</h4>
                    <div class="underline mt-3"></div>
                </div>
            </div>
            <p class="text-center mt-3" style=" font-size: 20px;">
                LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING
                INDUSTRY
            </p>

            <div class="row">

            </div>
        </div>
    </div> --}}

    {{-- <section class="bar bg-gray no-mb mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h3>Our Partners</h3>
                    </div>
                    <ul class="list-unstyled owl-carousel customers no-mb">
                        <li class="item"><img src="{{ asset('images/partners/octs.png') }}" alt="OCTS" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
