@extends('layouts.app')

@section('title', $artist->name)

@section('content')
    <div class="container">
        <section class="bar">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>About {{ $artist->name }}</h2>
                    </div>
                    <p class="lead"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>{!! $artist->details !!}</p>

                    <ul class="social d-flex flex-row">
                        @if (!empty($artist->facebook))
                            <li>
                                <a href="{{ $artist->facebook }}" style="background-color: #3a61c9">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif

                        @if (!empty($artist->twitter))
                            <li>
                                <a href="{{ $artist->twitter }}" style="background-color: #3a61c9">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif

                        @if (!empty($artist->instagram))
                            <li>
                                <a href="{{ $artist->instagram }}" style="background-color: #c97a3e">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-4">
                    <img alt="" src="{{ asset('images/artists/'.$artist->image) }}" class="img-fluid rounded-circle">
                </div>
            </div>
        </section>

        {{--<section class="bar pt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="heading">
                        <h3>Get in touch with {{ artist->name }}</h3>
                    </div>
                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                        <h3>Han's presentations</h3>
                    </div>
                    <ul class="ul-icons list-unstyled">
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Aliquam tincidunt mauris eu risus.</a>
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Vestibulum auctor dapibus neque.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                        <h3>Han's articles</h3>
                    </div>
                    <ul class="ul-icons list-unstyled">
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Aliquam tincidunt mauris eu risus.</a>
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div><a href="#">Vestibulum auctor dapibus neque.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>--}}
    </div>
@endsection
