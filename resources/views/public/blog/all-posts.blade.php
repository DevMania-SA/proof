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
                <div class="col-md-9" id="blog-listing">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-6">
                                <div class="blog">

                                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="{{ $post->title }}">

                                    <div class="contents">
                                        <h3>
                                            {{ $post->title }}
                                        </h3>
                                        <div class="date-meta">
                                            <p class="date">
                                                Posted {{ $post->created_at->diffForHumans() }} /
                                                By <a href="#">{{ $post->user->name }}</a>
                                            </p>

                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-github"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="clearfix"></div>

                                        <p class="intro">
                                            {!! str_limit($post->body, $limit = 100, $end = '...') !!}
                                        </p>

                                        <p class="read-more">
                                            <a href="{{ route('blog.post', $post->slug) }}">Continue reading</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                @include('public.includes.blog-side')

                <!-- Latest Posts -->
                {{-- <div class="posts-listing col-lg-8">
                    <div class="container">
                        <div class="row">
                            @foreach ($posts as $post)
                                <!-- post -->
                                <div class="post col-xl-6">
                                    <div class="post-thumbnail">
                                      <a href="{{ route('blog.post', $post->slug) }}">
                                        <img src="{{ asset('images/blog/medium/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                                      </a>
                                    </div>
                                    <div class="post-details">
                                        <div class="post-meta d-flex justify-content-between">
                                            <div class="date meta-last">
                                                <i class="fa fa-clock"></i> {{ $post->created_at->diffForHumans() }}
                                            </div>
                                            <div class="category">
                                                <a href="{{ route('blog.category', $post->category->slug) }}">
                                                    {{ $post->category->name }}
                                                </a>
                                            </div>
                                        </div>

                                        <a href="{{ route('blog.post', $post->slug) }}">
                                            <h3 class="h4">{{ $post->title }}</h3>
                                        </a>

                                        <p class="text-muted">
                                            {!! str_limit($post->body, $limit = 75, $end = '...') !!}
                                        </p>

                                        <footer class="post-footer d-flex align-items-center justify-content-between">
                                            <a href="#" class="author d-flex align-items-center flex-wrap">
                                              <div class="avatar">
                                                <img src="{{ asset('images/avatar.png') }}" alt="{{ $post->user->name }}" class="img-fluid">
                                              </div>
                                              <div class="title">
                                                <span>{{ $post->user->name }}</span>
                                              </div>
                                            </a>
                                            {{-- <div class="date">
                                                <i class="fa fa-clock"></i> {{ $post->created_at->diffForHumans() }}
                                            </div> --}}{{--
                                            <div class="comments meta-last">
                                                <i class="fa fa-comment"></i> {{ count($post->comments) }}
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation example">
                            {{ $posts->links() }}
                            {{-- <ul class="pagination pagination-template d-flex justify-content-center">
                                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                            </ul> --}}{{--
                        </nav>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
@endsection
