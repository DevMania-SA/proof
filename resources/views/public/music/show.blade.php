@extends('layouts.app')

@section('title', $song->title)

@section('content')
    <div class="">
        <div class="row">
            <!-- Latest Posts -->
            <div class="posts-listing col-lg-8">
                <audio id="audio">
                    <source src="{{ asset('storage/music/'.$song->song) }}">
                </audio>

                <div class="audio-player">
                    <div class="cover-art">
                        <a>
                            <img src="{{ asset('images/avatar.png') }}" alt="{{ $song->title }}" class="img-fluid" style="width: 100%;">
                        </a>
                    </div>
                    <div class="info">
                        <h2>
                            {{ $song->artist }}
                            @if(!empty($song->featured_artist))
                                ft {{ $song->featured_artist }}
                            @endif
                        </h2>
                        <h3>{{ $song->title }}</h3>
                        <p id="timeleft">00:00</p>
                        <div class="progressbar_slide">
                            <div class="progressbar_range"></div>
                        </div>
                    </div>
                    <div class="controls">
                        <div class="controls_plays">
                            <svg id="prev_btn" viewBox="0 0 24.5 23.6">
                                <polygon points="0,11.8 13.5,0 13.5,10.7 24.5,0 24.5,23.6 13.5,12.9 13.5,23.6 "/>
                            </svg>

                            <svg id="plays_btn" viewBox="0 0 24.5 30.9">
                                <g id="play_btn">
                                    <path d="M0,30.9L0,0l24.5,15.4L0,30.9z"/>
                                </g>
                                <g id="pause_btn">
                                    <rect x="0" y="0" width="8.2" height="30.9"/>
                                    <rect x="16.2" y="0" width="8.2" height="30.9"/>
                                </g>
                            </svg>

                            <svg id="next_btn" viewBox="0 0 24.5 23.6">
                                <polygon points="25,11.8 11.5,0 11.5,10.7 0.5,0 0.5,23.6 11.5,12.9 11.5,23.6 "/>
                            </svg>
                        </div>
                        <div class="controls_player">
                            <svg id="volume_btn" viewBox="0 0 23 23">
                                <path d="M17.5,6.6v9.9L11.4,13H5.5v-3h6L17.5,6.6z M10.7,7H2.5v9h8.2l9.8,5.3V1.2L10.7,7z"/>
                            </svg>

                            <svg id="shuffle_btn" viewBox="0 0 23 23">
                                <path d="M7.3,6l0.4,2.8l3.6-5l-5-3.6l0.5,3C3.6,4.4,1.1,7.4,1.1,11c0,4.4,2.4,8,7.4,8.3v-2.7
							c-3-0.3-4.7-2.7-4.7-5.6C3.8,8.8,5.5,7,7.3,6z"/>
                                <path d="M21.5,11c0-4.4-4-8-8-8.3v2.7c2,0.3,5.2,2.7,5.2,5.6c0,2.2-1.2,4-3,5l-0.4-2.8l-3.6,5l5,3.6l-0.6-3
							C19.4,17.6,21.5,14.6,21.5,11z"/>
                            </svg>

                            <svg id="playlist_btn" viewBox="0 0 23 23">
                                <rect x="1.5" y="2" width="20" height="3"/>
                                <rect x="1.5" y="9" width="20" height="3"/>
                                <rect x="1.5" y="17" width="20" height="3"/>
                            </svg>
                        </div>
                    </div>
                    {{--<canvas id="analyser_render"></canvas>--}}
                </div>

                <hr />


                <div class="card card-body mt-5 comments-section">
                    <h3>Comments section</h3>
                </div>
            </div>

            @include('public.includes.music-side')
        </div>
    </div>
@endsection
