@extends('layouts.app')

@section('title', 'Our Artists')

@section('content')
    <div class="container">
        <section class="bar mb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Who is responsible for our Music?</h2>
                    </div>

                    <p class="lead">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                        sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                    </p>

                    <div class="row text-center">
                        @if (count($artists) > 0)
                            @foreach($artists as $artist)
                                <div class="col-md-3">
                                    <div data-animate="fadeInUp" class="team-member">
                                        <div class="image">
                                            <a href="{{ route('artists.show', $artist->slug) }}">
                                                <img src="{{ asset('images/artists/medium/'.$artist->image) }}" alt="{{ $artist->name }}" class="img-fluid rounded-circle">
                                            </a>
                                        </div>

                                        <h3>
                                            <a href="{{ route('artists.show', $artist->slug) }}">{{ $artist->name }}</a>
                                        </h3>

                                        <p class="role">{{ $artist->position }} ({{ $artist->genre }})</p>

                                        <ul class="social d-flex flex-row justify-content-center">
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
                                        <div class="text mt-2">
                                            <p>
                                                {!! str_limit($artist->details, $limit = 50, $end = '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 mt-4">
                                <div class="jumbotron d-flex justify-content-center">
                                    <h1 class="h2">No artist added yet!</h1>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
