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

    <section class="Material-contact-section section-padding section-dark">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Love to Hear From You</h1>
                </div>
            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using Content.
                    </p>

                    <div class="find-widget">
                        Company:  <a href="https://proofdigitalmediagroup.co.za">Proof Digital Media Group (Pty) Ltd</a>
                    </div>
                    <div class="find-widget">
                        Address: <a href="#">1234 Maunde Street</a>
                    </div>
                    <div class="find-widget">
                        Phone:  <a href="#">+27 71-234-5678</a>
                    </div>

                    <div class="find-widget">
                        Website:  <a href="https://proofdigitalmediagroup.co.za">www.proofdigitalmediagroup.co.za</a>
                    </div>
                    <div class="find-widget">
                        Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                    </div>
                </div>

                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form action="{{route('contact.mail')}}" class="shake" role="form" method="POST" id="contactForm" name="contact-form" data-toggle="validator">
                        @csrf
                        <!-- Name -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name" value="{{ old('name') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email" value="{{ old('email') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group label-floating">
                            <label class="control-label">Subject</label>
                            <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject" value="{{ old('subject') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message">{{ old('message') }}</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Form Submit -->
                        <div class="form-submit mt-5">
                            <button class="btn btn-outline-secondary" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden">
                                @include('public.includes.message')
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
