@extends('blog.layouts.index')
@section('title', 'Waterdrop')
@section('container')
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($albums as $album)
                <div class="post-preview">
                    <a href="{{ URL::route('album::open', ['id' => $album->album_id]) }}">
                        <h2 class="post-title">
                            {{ $album->name }}



                        </h2>
                        <img src="{{ $album->cover->f150_150 or 'https://farm2.staticflickr.com/1527/24446765284_56d5959a63_s.jpg'}}"/>

                    </a>
                   
                    <p class="post-meta">Post by Colon<a href="#"> at </a> {{ $album->datetime->diffForHumans() }}</p>
                </div>
                <hr>
                @endforeach


                        <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        {!! $albums->render() !!}

                    </li>
                </ul>
        </div>
    </div>
    @endSection