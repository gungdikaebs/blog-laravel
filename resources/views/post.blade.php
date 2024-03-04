{{-- @dd($post)   --}}

@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article class="mb-5">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <small><p>By. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p></small>
                    <img src="https://source.unsplash.com/1000x500?{{ $post->category->name }}" alt="" class="img-fluid">
                    <p class="fs-3 text">{!! $post->content !!}</p>
                </article>
                <a href="/posts" class="btn btn-dark text-light">Back To Blog</a>
            </div>
        </div>
    </div>
</div>
    

@endsection