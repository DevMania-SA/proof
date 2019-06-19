@extends('layouts.app')

@section('title', "Contact Us")

@section('content')

    <!-- Services -->
    <header class="contact-section" id="contact-section">
        <div class="dark-overlay">
            <div class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    @yield('title')
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="mt-4 text-center">
                                    You're not going to hit a ridiculously long phone
                                    menu when you call us. Your email isn't going to
                                    the inbox abyss, never to be seen or heard from
                                    again. At PDMG, we provide the exceptional
                                    service we'd want to experience ourselves!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="contact-details" class="contact-details bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="contact-thumbnail" id="contac-img">
                        <img src="{{ asset('images/contact-img.jpg') }}" alt="Contact Us" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="direct-contact">
                        <div class="direct-header">
                            <h3 class="display-5">Contact Us</h3>
                            <p>
                                We are improving our services to serve you better.
                            </p>
                        </div>

                        <div class="direct-contents">
                            <p class="address">
                                Address:
                            </p>

                            <p class="phone">
                                Phone:
                            </p>

                            <p class="email">
                                Email:
                            </p>

                            <p class="open-hours">
                                Open hours:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area bg-light text-muted">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="section-heading">
                        <h2>GET IN TOUCH</h2>
                        <p class="my-3">Send us a message, we will call back later</p>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-5">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="contact-email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact-subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mt-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-5">
                        {{-- {!! Mapper::render() !!} --}}
                        {{-- <iframe width="600" height="450" frameborder="0" style="border:0" src="https://maps.googleapis.com/maps/api/staticmap?center=40.714%2c%20-73.998&zoom=12&size=400x400&key=AIzaSyDzog-OOtDAUW_S2FPg3CXDtNrHpqnhS1E&signature=36Rx0XJn5jTe4TiXxTQ-GtjcrFo=" allowfullscreen></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact_col">
                    <div class="contact_contents">
                        <h1>@yield('title')</h1>

                        <p>
                            There are many ways to contact us. You may drop us a line, give us a call or send an email,
                            choose what suits you the most.
                        </p>

                        <div>
                            <p>(+27)71 234-5678</p>
                            <p>info@fossilrecordscorp.co.za</p>
                        </div>

                        <div>
                            <p>
                                13/25 New Avenue<br />
                                Suburb, 45Y 73J<br />
                                Mpumalanga,  <strong>South Africa</strong>
                            </p>
                        </div>
                        <div>
                            <p>Open hours: 8:00-18:00 Mon-Fri</p>
                            <p>Saturday: Closed</p>
                            <p>Sunday: Closed</p>
                        </div>

                        <div class="follow_us_contents">
                            <h1>Follow Us</h1>
                            <ul class="social d-flex flex-row">
                                <li>
                                    <a href="#" style="background-color: #3a61c9">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="background-color: #41a1f6">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="background-color: #fb4343">
                                        <i class="fab fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="background-color: #8f6247">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 get_in_touch_col">
                    <div class="get_in_touch_contents mt-4">
                        <h1>Get In Touch With Us!</h1>

                        <p>Have any question? Please fill out the form below</p>

                        @include('public.includes.message')

                        <form method="post" action="{{route('contact.store')}}">
                        @csrf
                            <div>
                                <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                                <input id="input_subject" class="form_input input_subject input_ph" type="text" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
                                <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
                            </div>
                            <div>
                                <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5 bg-light">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
