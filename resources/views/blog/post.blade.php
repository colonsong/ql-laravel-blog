@extends('blog.layouts.index')
@section('title', 'Waterdrop')
@section('container')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ URL::route('blog::read', ['id' => $post->blogContents_id]) }}">
                        <h2 class="post-title">

                            {{ $post->title }}

                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post->classify }}
                        </h3>
                    </a>
                    {!! $post->contents !!}
                    <p class="post-meta">Post by Colon<a href="#"> at </a> {{ $post->datetime }}</p>
                </div>
                <hr>
                @endforeach
        </div>
    </div>
    @endSection