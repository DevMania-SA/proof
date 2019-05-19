@extends('layouts.app')

@section('title', "Blog")

@section('content')
    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <div class="posts-listing col-lg-8">
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
                                        </div> --}}
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
                        </ul> --}}
                    </nav>
                </div>
            </div>

            @include('public.includes.blog-side')
        </div>
    </div>

    {{-- <div class="container">
        <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div id="blog-listing-medium" class="col-md-9">
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                  <div class="image">
                                      <a href="{{ route('blog.post', $blog->slug) }}">
                                          <img src="{{ asset('images/blog/'.$blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" />
                                      </a>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="h3 mt-0">
                                        <a href="{{ route('blog.post', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h2>
                                    <div class="d-flex flex-wrap justify-content-between text-xs">
                                        <p class="author-category">
                                            By <a href="#">{{ $blog->user->name }}</a> --}}
                                            {{-- @foreach ($blog->categories as $category)
                                                in
                                                <a href="{{ route('blog.categories', $blog->categories['slug']) }}">
                                                    {{ $category->name }}
                                                </a>
                                            @endforeach --}}
                                        {{-- </p>
                                        <p class="date-comments">
                                            <a href="{{ route('blog.post', $blog->slug) }}">
                                                <i class="fa fa-calendar-o"></i> {{ $blog->created_at->diffForHumans() }}
                                            </a>
                                            <a href="{{ route('blog.post', $blog->slug) }}">
                                                <i class="fa fa-comment-o"></i> {{ $blog->comments()->count() }} Comments
                                            </a>
                                        </p>
                                    </div>
                                    <p class="intro">
                                        {!! str_limit($blog->body, $limit = 250, $end = '...') !!}
                                    </p>
                                    <p class="read-more text-right">
                                        <a href="{{ route('blog.post', $blog->slug) }}" class="btn btn-template-outlined">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                    @endforeach --}}

                    {{--<ul class="pager d-flex align-items-center justify-content-between list-unstyled">
                        <li class="previous">
                            <a href="#" class="btn btn-template-outlined">← Older</a>
                        </li>
                        <li class="next disabled">
                            <a href="#" class="btn btn-template-outlined">Newer →</a>
                        </li>
                    </ul>--}}
                    {{-- {{ $blogs->links() }}

                @else
                    <div class="jumbotron d-flex justify-content-center">
                        <h2 class="text-center">No posts available yet!</h2>
                    </div>
                @endif
            </div>
            <!-- RIGHT COLUMN _________________________________________________________-->
            <div class="col-md-3">
                @include('public.includes.blog-side')
            </div>
        </div>
    </div> --}}
@endsection
