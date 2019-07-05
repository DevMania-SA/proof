@extends('layouts.app')

@section('title', 'Music')

@section('content')
    <div class="row mb-4">
        @foreach($songs as $song)
            <div class="col-sm-3">
                <div class="box-image">
                    <div class="image">
                        <img src="{{ asset('images/avatar.png') }}" alt="{{ $song->title }}" class="img-fluid" style="width: 100%;">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="content">
                                <div class="name">
                                    <h3><a href="{{ route('tracks.song', $song->slug) }}" class="color-white">{{ $song->title }}</a></h3>
                                </div>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="{{ route('tracks.song', $song->slug) }}" class="btn btn-template-outlined-white">
                                            <i class="fa fa-caret-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{--<div id="music" class="container">
        <section class="bar">
            <div class="row">
                <div class="col-md-8">
                    @foreach($songs as $song)
                        <div class="music-item">
                            <div id="jquery_player_audio" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media-player">
                                <div class="jp-type-single">
                                    <div class="jp-gui jp-interface">
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute" role="button" tabindex="0">Mute</button>
                                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>

                                        <div class="jp-controls-holder">
                                            <div class="jp-controls">
                                                <button class="jp-play" role="button" tabindex="0">play</button>
                                                <button class="jp-stop" role="button" tabindex="0">stop</button>
                                            </div>

                                            <div class="jp-progress">
                                                <div class="jp-seek-bar">
                                                    <div class="jp-play-bar"></div>
                                                </div>
                                            </div>

                                            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>

                                            <div class="jp-toggles">
                                                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jp-details">
                                        <div class="jp-title" aria-label="title">&nbsp;</div>
                                    </div>

                                    <div class="jp-no-solution">
                                        <span>Update Required</span>
                                        To play the media you will need to either update your browser to a resent
                                        version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">
                                            Flash player
                                        </a>.
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="" class="btn btn-flat btn-outline-secondary">Download</a>

                                <div class="social-share">
                                    <span>Share:</span>
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-google-plus"></i></a>
                                    <a href=""><i class="fab fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{ $songs->links() }}
                </div>
                <div class="col-md-4">
                    <div class="card card-dark">
                        <div class="card-body">
                            search
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>--}}
@endsection
