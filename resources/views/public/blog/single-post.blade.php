@extends('layouts.app')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', $titleTag)

@section('content')
    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <div class="post blog-post col-lg-8">
                <div class="container">
                    <div class="post-single">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/blog/medium/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                        </div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="category">
                                    <a href="{{ route('blog.category', $post->category->slug) }}">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                            </div>
                            <h1>
                                {{ $post->title }}
                                <a href="#">
                                    <i class="fa fa-bookmark"></i>
                                </a>
                            </h1>
                            <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                                <a href="#" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar">
                                        <img src="{{ asset('images/avatar.png') }}" alt="{{ $post->user->name }}" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <span>{{ $post->user->name }}</span>
                                    </div>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="date">
                                        <i class="icon-clock fa fa-clock"></i> {{ $post->created_at->diffForHumans() }}
                                    </div>
                                    <div class="views">
                                        <i class="icon-eye fa fa-eye"></i> {{ $post->view_count }}
                                    </div>
                                    <div class="comments meta-last">
                                        <i class="icon-comment fa fa-comment"></i> {{ $post->comments->count() }}
                                    </div>
                                </div>
                            </div>

                            <div class="post-body">
                                <p>
                                    {!! $post->body !!}
                                </p>
                            </div>

                            <div class="post-tags">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('tag.post', $tag->slug) }}" class="tag">
                                        #{{ ucfirst($tag->name) }}
                                    </a>
                                @endforeach
                            </div>

                            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                              <a href="#" class="prev-post text-left d-flex align-items-center">
                                  <div class="icon prev">
                                      <i class="fa fa-angle-left"></i>
                                  </div>
                                  <div class="text">
                                      <strong class="text-primary">Previous Post </strong>
                                      <h6>I Bought a Wedding Dress.</h6>
                                  </div>
                              </a>
                              <a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                                  <div class="text"><strong class="text-primary">Next Post </strong>
                                      <h6>I Bought a Wedding Dress.</h6>
                                  </div>
                                  <div class="icon next">
                                      <i class="fa fa-angle-right"></i>
                                  </div>
                              </a>
                            </div>
                            <div class="post-comments">
                                <div class="fb-comments" data-href="{{ route('blog.post', $post->slug) }}" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('public.includes.blog-side')
        </div>
    </div>
@endsection
