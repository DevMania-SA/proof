@extends('layouts.app')

@section('title', "Blog")

@section('content')
    <header class="service-section" id="service-section">
        <div class="dark-overlay">
            <div class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    Our Blog
                                </h1>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="posts" class=" bg-light p-5">
        <div class="container">
            <div class="row">
                {{-- Blog Listing --}}
                <div class="col-md-8 posts-listing" id="blog-listing">
                    <div class="container">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="post col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="post-thumbnail">
                                        <a href="{{ route('blog.post', $post->slug) }}">
                                            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="{{ $post->title }}">
                                        </a>
                                    </div>

                                    <div class="post-details">
                                        <div class="post-meta d-flex justify-content-between">
                                            <div class="date meta-last">
                                                {{ $post->created_at->diffForHumans() }}
                                            </div>
                                            <div class="category">
                                                <a href="#">
                                                    {{ $post->category->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog.post', $post->slug) }}">
                                            <h3 class="h4">
                                                {{ $post->title }}
                                            </h3>
                                        </a>
                                        <p class="text-muted">
                                            {{-- {!! str_limit($post->body, $limit = 100, $end = '...') !!} --}}
                                        </p>
                                        <footer class="post-footer d-flex align-items-center">
                                            <div class="avatar">
                                                <img src="{{ asset('images/avatar.png') }}" alt="{{ $post->user->name }}" class="img-fluid">
                                            </div>
                                            <div class="title">
                                                <span>{{ $post->user->name }}</span>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock"></i> {{ $post->published_at->diffForHumans() }}
                                            </div>
                                            <div class="views meta-last">
                                                <i class="fas fa-eye"></i> {{ $post->view_count }}
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                @include('public.includes.blog-side')
            </div>
        </div>
    </section>
@endsection
