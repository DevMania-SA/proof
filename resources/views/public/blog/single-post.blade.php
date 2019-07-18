@extends('layouts.app')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', $titleTag)

@section('content')
    <header class="post-section" id="post-section" style="background: url({{ asset('storage/'.$post->image) }})">
        <div class="dark-overlay">
            <div class="post-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-center">
                                <h1 class="display-4">
                                    {{ $post->title }}
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

    <section id="single-post" class=" bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="post blog-post col-md-8 col-lg-8">
                    <div class="container">
                        <div class="post-single">
                            {{-- <div class="post-thumbnail">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                            </div> --}}

                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="category">
                                        <a href="#">{{ $post->category->name }}</a>
                                    </div>
                                </div>

                                <h1>{{ $post->title }}</h1>

                                <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                                    <a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar">
                                            <img src="{{ asset('images/avatar.png') }}" alt="{{ $post->user->name }}" class="img-fluid">
                                        </div>
                                        <div class="title">
                                            <span>{{ $post->user->name }}</span>
                                        </div>
                                    </a>
                                    <div class="d-flex align-items-center flex-wrap stats">
{{--                                        <div class="date">--}}
{{--                                            <i class="icon-clock fas fa-clock"></i> {{ $post->published_at }}--}}
{{--                                        </div>--}}

                                        <div class="views">
                                            <i class="icon-eye fas fa-eye"></i> {{ $post->view_count }}
                                        </div>

                                        <div class="comments meta-last">
                                            <i class="icon-comment fas fa-comment"></i> {{ $post->comments()->count() }}
                                        </div>
                                    </div>
                                </div>

                                <div class="post-body">
                                    {!! $post->body !!}
                                </div>

                                <div class="d-flex justify-content-between mt-3">
                                    <div class="post-tags">
                                        @foreach($post->tags as $tag)
                                            <a href="#" class="tag">#{{ $tag->name }}</a>
                                        @endforeach
                                    </div>

                                    <div class="social-share">
                                        <div class="addthis_inline_share_toolbox"></div>
                                    </div>
                                </div>

                                <div id="disqus_thread"></div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('public.includes.blog-side')
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d2fa45fe04751ef"></script>

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /**/
        var disqus_config = function () {
            this.page.url = "{{ config('app.url') }}/blog/{{ $post->id }}";  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = "{{ $post->id }}" // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };


        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://pdmg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection