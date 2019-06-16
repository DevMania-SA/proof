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
            <div class="row">
                <div class="col-md-8">
                    <h3 class="dispplay-4">
                        PDMG strives to provide the best service possible with 
                        every contact! 
                    </h3>
                    <p class="mt-3">
                        We operate in an industry built on trust. This can only be achieved 
                        through communication and experienced support – from the first contact 
                        past your ten-year anniversary.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="direct-contact">
                        <h3 class="display-5">Direct Contact</h3>
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
