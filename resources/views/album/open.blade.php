@extends('blog.layouts.index')
@section('title', 'Waterdrop')
@section('container')
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($album as $my_album)

                <div class="post-preview">

                        <h2 class="post-title">
                            {{ $my_album->name }}



                        </h2>
                        @foreach($my_album->pics as $pic)
                        <img src="{{ $pic->f150_150 or 'https://farm2.staticflickr.com/1527/24446765284_56d5959a63_s.jpg'}}"/>
                        @endforeach


                    <p class="post-meta">Post by Colon<a href="#"> at </a> {{ $my_album->datetime->diffForHumans() }}</p>
                </div>
                <hr>
                @endforeach


        </div>
    </div>
    @endSection